<?php

Abstract class VeebipoedCarrierModel extends ObjectModel
{
	public static function createSize($values)
	{
		$class = get_called_class();
		$size = new $class();
        foreach ($class::$definition['fields'] as $field => $defines) {
            if(isset($values[$field])) {
				$size->{$field} = $values[$field];
			}
		}
		return $size;
	}

	public static function getSizes($include_deleted = false, $id_group = 0, $order_total = 0)
	{
		$class = get_called_class();

		$where = array();

        if ($include_deleted) {
			$where[] = '`deleted`=0';
		}

        if ($id_group) {
			$where[] = '(`id_group`=0 OR `id_group`='.$id_group.')';
		}

        if ($order_total) {
			$where[] = sprintf('(`price_from` <= %1$f AND `price_to` > %1$f)', $order_total);
		}

		$sql = 'SELECT `'.$class::$definition['primary'].'`, (height*width*depth) AS volume, '.
			'`name`, `height`, `width`, `depth`, `price`, `id_group` ' .
			'FROM `' . _DB_PREFIX_ .  $class::$definition['table'] . '` ';

        if ($where) {
			$sql .= 'WHERE ';
		}

		$sql .= join(' AND ', $where) . ' ORDER BY volume ASC, id_group ASC';

		return Db::getInstance()->executeS($sql);
	}
	
	public function delete()
	{
        if (!ObjectModel::$db) {
			ObjectModel::$db = Db::getInstance();
        }
			
		Hook::exec('actionObjectDeleteBefore', array('object' => $this));
		Hook::exec('actionObject'.get_class($this).'DeleteBefore', array('object' => $this));
		
		$this->clearCache();
		
		$result = ObjectModel::$db->update($this->def['table'], array('deleted' => 1),
			sprintf('`%s`=%d', $this->def['primary'], (int)$this->id)
		);

        if(!$result) {
			return false;
        }

		Hook::exec('actionObjectDeleteAfter', array('object' => $this));
		Hook::exec('actionObject'.get_class($this).'DeleteAfter', array('object' => $this));
		
		return $result;
	}
}
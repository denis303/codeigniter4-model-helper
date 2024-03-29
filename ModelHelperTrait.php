<?php
/**
 * @author denis303
 * @link http://denis303.com
 * @license MIT
 */
namespace denis303\codeigniter4;

trait ModelHelperTrait
{

    public static function findByPk($id)
    {
        return ModelHelper::findByPk(get_called_class(), $id);
    }

    public static function refreshEntity(&$entity, &$error = null)
    {
        return ModelHelper::refreshEntity(get_called_class(), $entity, $error);
    }

    public static function entityField($entity, $field)
    {
        return ModelHelper::entityField(get_called_class(), $entity, $field);
    }

    public static function setEntityField(&$entity, $field, $value)
    {
        return ModelHelper::setEntityField(get_called_class(), $entity, $field, $value);
    }

    public static function entityPrimaryKey($entity, &$error = null)
    {
        return ModelHelper::entityPrimaryKey(get_called_class(), $entity, $error);
    }

    public static function saveEntity($entity, $protect = true, &$error = null)
    {
        return ModelHelper::saveEntity(get_called_class(), $entity, $protect, $error);
    }

    public static function createEntity($data = [], $save = false, $protect = true, &$error = null)
    {
        return ModelHelper::createEntity(get_called_class(), $data, $save, $protect, $error);
    }

    public static function getEntity(array $where, bool $create = false, array $params = [], bool $update = false, &$error = null)
    {
        return ModelHelper::getEntity(get_called_class(), $where, $create, $params, $update, $error); 
    }

}
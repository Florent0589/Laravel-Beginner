<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    
    /**
     * @var int status active
     */
    const ACTIVE    = 1;
    /**
     * @var int status pending
     */
    const PENDING   = 2;
    /**
     * @var int status suspended
     */
    const SUSPENDED = 3;
    /**
     * @var int status deleted
     */
    const DELETED   = 4;
    /**
     * @var int status rejected
     */
    const REJECTED  = 5;
    /**
     * @var int status completed
     */
    const COMPLETED = 6;
    /**
     * @var int status paid
     */
    const PAID = 7;
    /**
     * @var int status opened
     */
    const OPENED = 8;
    /**
     * @var int status closed
     */
    const CLOSED = 9;
    /**
     * @var int status credited
     */
    const CREDITED = 10;
    /**
     * @var int status debited
     */
    const DEBITED = 11;
    /**
     * @var int status verified
     */
    const VERIFIED = 12;
    /**
     * @var int status not verified
     */
    const NOT_VERIFIED = 13;
    /**
     * @var int status withdrawn
     */
    const WITHDRAWN = 14;
    /**
     * @var int status dropped off
     */
    const DROPPED_OFF = 15;
    
    /**
     * check if status if active
     * @param object $objProfile
     * @note status active return true otherwise false
     * @return boolean
     */
    public static function isActive($objProfile){
        
        // if object
        if(is_object($objProfile)){
            
            // return bool
            return ($objProfile->status_id == self::ACTIVE) ? true : false;
        }
    }
    
    /**
     * check if status if pending
     * @param object $objProfile
     * @note status pending return true otherwise false
     * @return boolean
     */
    public static function isPending($objProfile){
            
        // if object
        if(is_object($objProfile)){
    
            // return bool
            return ($objProfile->status_id == self::PENDING) ? true : false;
        }
    }
    
    /**
     * check if status if suspended
     * @param object $objProfile
     * @note status suspended return true otherwise false
     * @return boolean
     */
    public static function isSuspended($objProfile){
            
        // if object
        if(is_object($objProfile)){
    
            // return bool
            return ($objProfile->status_id == self::SUSPENDED) ? true : false;
        }
    }
    
    /**
     * check if status if deleted
     * @param object $objProfile
     * @note status deleted return true otherwise false
     * @return boolean
     */
    public static function isDeleted($objProfile){
            
        // if object
        if(is_object($objProfile)){
    
            // return bool
            return ($objProfile->status_id == self::DELETED) ? true : false;
        }
    }
    
    /**
     * check if status if rejected
     * @param object $objProfile
     * @note status rejected return true otherwise false
     * @return boolean
     */
    public static function isRejected($objProfile){
            
        // if object
        if(is_object($objProfile)){
    
            // return bool
            return ($objProfile->status_id == self::REJECTED) ? true : false;
        }
    }
    
    /**
     * check if status if completed
     * @param object $objProfile
     * @return boolean
     * <p> If status is completed return true otherwise false</p>
     */
    public static function isCompleted($objProfile){
            
        // if object
        if(is_object($objProfile)){
    
            // return bool
            return ($objProfile->status_id == self::COMPLETED) ? true : false;
        }
    }
    
    /**
     * check if status if paid
     * @param object $objProfile
     * @return boolean
     * <p> If status is paid return true otherwise false</p>
     */
    public static function isPaid($objProfile){
            
        // if object
        if(is_object($objProfile)){
    
            // return bool
            return ($objProfile->status_id == self::PAID) ? true : false;
        }
    }
    /**
     * translate status
     * @param int $status_id
     * @return array
     * <p>array([0] => id,
     * 				 [1] => langauge,
     *               [2] => style class)
     *  |null[]</p>
     */
    public static function translateStatus($status_id){
        
        $arrTranslatedStatus = array();
        
        switch ($status_id){
            
            case self::ACTIVE:
                
                $arrTranslatedStatus[] = $status_id;
                $arrTranslatedStatus[] = "Active";
                $arrTranslatedStatus[] = 'btn-info';
                
                break;
            case self::PENDING:
                
                $arrTranslatedStatus[] = $status_id;
                $arrTranslatedStatus[] = "Pending";
                $arrTranslatedStatus[] = 'btn-success';
                
                break;
            case self::SUSPENDED:
                    
                $arrTranslatedStatus[] = $status_id;
                $arrTranslatedStatus[] = "Suspended";
                $arrTranslatedStatus[] = 'btn-danger';
                    
                break;
            case self::DELETED:
                    
                $arrTranslatedStatus[] = $status_id;
                $arrTranslatedStatus[] = "Deleted";
                $arrTranslatedStatus[] = 'btn-danger';
                    
                break;
            case self::PAID:
            
                $arrTranslatedStatus[] = $status_id;
                $arrTranslatedStatus[] = "Paid";
                $arrTranslatedStatus[] = 'btn-primary';

                break;
            case self::NOT_VERIFIED:
        
                $arrTranslatedStatus[] = $status_id;
                $arrTranslatedStatus[] = "Not Verified";
                $arrTranslatedStatus[] = 'btn-warning';
                
                break;
            case self::DROPPED_OFF:
        
                $arrTranslatedStatus[] = $status_id;
                $arrTranslatedStatus[] = "Dropped Off";
                $arrTranslatedStatus[] = 'btn-warning';
                
                break;
            case self::WITHDRAWN:
        
                $arrTranslatedStatus[] = $status_id;
                $arrTranslatedStatus[] = "Withdrawn";
                $arrTranslatedStatus[] = 'btn-danger';
                
                break;
            case self::CLOSED:
        
                $arrTranslatedStatus[] = $status_id;
                $arrTranslatedStatus[] = "Closed";
                $arrTranslatedStatus[] = 'btn-danger';
                
                break;
        }
        return $arrTranslatedStatus;
    }
    /**
     * get statuses list
     * @return array[]
     */
    public static function getStatuses() {
        
        // return array
        return array(self::ACTIVE     => 'Active / Approved',
                        self::PENDING    => 'Pending',
                        self::SUSPENDED  => 'Suspended',
                        self::DELETED    => 'Deleted',
                        self::PAID       => 'Paid',
                        self::COMPLETED  => 'Completed',
                        self::REJECTED   => 'Rejected'
        );
    }
}

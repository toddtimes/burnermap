<?php namespace BurnerMap\Models;

use Illuminate\Database\Eloquent\Model;

class Burners2011 extends Model
{
    protected $table      = 'Burners2011';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = 
    [
        'user', 
        'name', 
        'playaName', 
        'camp', 
        'camp', 
        'addyClock', 
        'addyLetter', 
        'addyLetter2', 
        'notes', 
        'dateChanged', 
        'x', 
        'y', 
        'email', 
        'emailRemind', 
        'campID', 
        'browser', 
        'edits', 
        'opts', 
        'gender', 
        'ip', 
        'privateNotes', 
        'messages', 
        'ticketEdits', 
        'ticketNeeds', 
        'ticketHas', 
        'ticketHold', 
        'ticketFriend', 
        'ticketFriendNeeds', 
        'lastTicketCheck', 
        'dateArrive', 
        'dateDepart', 
        'yearStatus', 
        'villageID',  
    ];
}

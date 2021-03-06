<?php

namespace Onyx\Calendar\Objects;

use Illuminate\Database\Eloquent\Model;
use Onyx\Account;
use Onyx\Destiny\Objects\Character;
use Onyx\Halo5\Objects\Data;
use Onyx\User;

/**
 * Class Attendee.
 *
 * @property int $game_id
 * @property int $membershipId
 * @property int $characterId
 * @property int $account_id
 * @property int $user_id
 * @property bool $attended
 * @property Account $account
 * @property Character $character
 * @property \Onyx\Destiny2\Objects\Character $d2charater
 * @property Data $h5
 * @property User $user
 * @property Event $event
 */
class Attendee extends Model
{
    protected $table = 'calendar_attendees';

    protected $fillable = ['game_id', 'membershipId', 'characterId', 'account_id', 'user_id', 'attended'];

    public $timestamps = false;

    //---------------------------------------------------------------------------------
    // Accessors & Mutators
    //---------------------------------------------------------------------------------

    //---------------------------------------------------------------------------------
    // BOOT Methods
    //---------------------------------------------------------------------------------

    public static function boot()
    {
    }

    //---------------------------------------------------------------------------------
    // Public Methods
    //---------------------------------------------------------------------------------

    public function account()
    {
        return $this->belongsTo('Onyx\Account', 'account_id', 'id');
    }

    public function character()
    {
        return $this->belongsTo('Onyx\Destiny\Objects\Character', 'characterId', 'characterId');
    }

    public function d2character()
    {
        return $this->belongsTo('Onyx\Destiny2\Objects\Character', 'characterId', 'characterId');
    }

    public function h5()
    {
        return $this->belongsTo('Onyx\Halo5\Objects\Data', 'account_id', 'account_id');
    }

    /**
     * @return mixed
     */
    public function ow()
    {
        return $this
            ->hasOne('Onyx\Overwatch\Objects\Stats', 'account_id', 'account_id')
            ->orderBy('season', 'DESC');
    }

    public function user()
    {
        return $this->belongsTo('Onyx\User', 'user_id', 'id');
    }

    public function event()
    {
        return $this->belongsTo('Onyx\Calendar\Objects\Event', 'game_id', 'id');
    }
}

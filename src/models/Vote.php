<?php
namespace verbb\comments\models;

use verbb\comments\records\Vote as VoteRecord;

use Craft;
use craft\base\Model;

class Vote extends Model
{
    // Public Properties
    // =========================================================================

    public $id;
    public $commentId;
    public $userId;
    public $upvote;
    public $downvote;


    // Public Methods
    // =========================================================================

    public function rules()
    {
        return [
            [['id'], 'number', 'integerOnly' => true],
            [['commentId'], 'required'],
        ];
    }
    
}
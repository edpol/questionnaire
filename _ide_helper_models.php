<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Answer
 *
 * @property int $id
 * @property string $answer
 * @property int|null $question_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Item[] $item
 * @property-read \App\Models\Question|null $question
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Answer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Answer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Answer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Answer whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Answer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Answer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Answer whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Answer whereUpdatedAt($value)
 */
	class Answer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Heading
 *
 * @property int $id
 * @property string $heading
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Question[] $question
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heading newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heading newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heading query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heading whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heading whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heading whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Heading whereUpdatedAt($value)
 */
	class Heading extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Item
 *
 * @property int $id
 * @property int $answer_id
 * @property int $stock_id
 * @property int $add
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Answer $answer
 * @property-read \App\Models\Stock $stock
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereAnswerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereStockId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereUpdatedAt($value)
 */
	class Item extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Question
 *
 * @property int $id
 * @property int $order
 * @property int|null $heading_id
 * @property string $question
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Answer[] $answers
 * @property-read \App\Models\Heading|null $heading
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereHeadingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereUpdatedAt($value)
 */
	class Question extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Stock
 *
 * @property int $id
 * @property string $name
 * @property string $sku
 * @property string $link
 * @property float $price
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Item[] $item
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Stock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Stock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Stock query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Stock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Stock whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Stock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Stock whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Stock whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Stock wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Stock whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Stock whereUpdatedAt($value)
 */
	class Stock extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}


<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Blog Entity
 *
 * @property int $id
 * @property int|null $category_id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $image
 * @property \Cake\I18n\FrozenTime $date
 *
 * @property \App\Model\Entity\Category $category
 */
class Blog extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'category_id' => true,
        'title'       => true,
        'description' => true,
        'image'       => true,
        'date'        => true,
        'category'    => true,
    ];
}

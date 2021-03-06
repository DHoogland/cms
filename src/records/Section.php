<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.github.io/license/
 */

namespace craft\records;

use craft\db\ActiveRecord;
use yii\db\ActiveQueryInterface;

/**
 * Class Section record.
 *
 * @property int                    $id               ID
 * @property int                    $structureId      Structure ID
 * @property string                 $name             Name
 * @property string                 $handle           Handle
 * @property string                 $type             Type
 * @property bool                   $enableVersioning Enable versioning
 * @property Section_SiteSettings[] $siteSettings     Site settings
 * @property Structure              $structure        Structure
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class Section extends ActiveRecord
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     *
     * @return string
     */
    public static function tableName(): string
    {
        return '{{%sections}}';
    }

    /**
     * Returns the associated site settings.
     *
     * @return ActiveQueryInterface The relational query object.
     */
    public function getSiteSettings(): ActiveQueryInterface
    {
        return $this->hasMany(Section_SiteSettings::class, ['sectionId' => 'id']);
    }

    /**
     * Returns the section’s structure.
     *
     * @return ActiveQueryInterface The relational query object.
     */
    public function getStructure(): ActiveQueryInterface
    {
        return $this->hasOne(Structure::class, ['id' => 'structureId']);
    }
}

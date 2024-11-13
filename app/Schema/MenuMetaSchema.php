<?php

declare(strict_types=1);
/**
 * This file is part of MineAdmin.
 *
 * @link     https://www.mineadmin.com
 * @document https://doc.mineadmin.com
 * @contact  root@imoi.cn
 * @license  https://github.com/mineadmin/MineAdmin/blob/master/LICENSE
 */

namespace App\Schema;

use Hyperf\Swagger\Annotation\Property;
use Hyperf\Swagger\Annotation\Schema;

/**
 * @property string $title 标题
 * @property string $i18n 国际化
 * @property string $badge 徽章
 * @property string $icon 图标
 * @property bool $affix 是否固定
 * @property bool $hidden 是否隐藏
 * @property string $type 类型
 * @property bool $cache 是否缓存
 * @property bool $copyright 是否
 * @property string $link 链接
 */
#[Schema(title: 'MenuMetaSchema')]
final class MenuMetaSchema
{
    #[Property(property: 'title', title: '标题', type: 'string')]
    public string $title;

    #[Property(property: 'i18n', title: '国际化', type: 'string')]
    public string $i18n;

    #[Property(property: 'badge', title: '徽章', type: 'string')]
    public string $badge;

    #[Property(property: 'icon', title: '图标', type: 'string')]
    public string $icon;

    #[Property(property: 'affix', title: '是否固定', type: 'bool')]
    public bool $affix;

    #[Property(property: 'hidden', title: '是否隐藏', type: 'bool')]
    public bool $hidden;

    #[Property(property: 'type', title: '类型', type: 'string')]
    public string $type;

    #[Property(property: 'cache', title: '是否缓存', type: 'bool')]
    public bool $cache;

    #[Property(property: 'copyright', title: '是否显示版权', type: 'bool')]
    public bool $copyright;

    #[Property(property: 'breadcrumbEnable', title: '是否显示面包屑', type: 'bool')]
    public bool $breadcrumbEnable;

    #[Property(property: 'componentPath', title: '视图前缀路径', type: 'string')]
    public string $componentPath;

    #[Property(property: 'componentSuffix', title: '视图文件类型', type: 'string')]
    public string $componentSuffix;

    #[Property(property: 'link', title: '链接', type: 'string')]
    public string $link;

    public function __construct(
        string $title = '',
        string $i18n = '',
        string $badge = '',
        string $icon = '',
        bool $affix = false,
        bool $hidden = false,
        string $type = '',
        bool $cache = true,
        bool $copyright = true,
        bool $breadcrumbEnable = true,
        string $componentPath = '',
        string $componentSuffix = '',
        string $link = ''
    ) {
        $this->title = $title;
        $this->i18n = $i18n;
        $this->badge = $badge;
        $this->icon = $icon;
        $this->affix = $affix;
        $this->hidden = $hidden;
        $this->type = $type;
        $this->cache = $cache;
        $this->copyright = $copyright;
        $this->componentPath = $componentPath;
        $this->componentSuffix = $componentSuffix;
        $this->breadcrumbEnable = $breadcrumbEnable;
        $this->link = $link;
    }
}

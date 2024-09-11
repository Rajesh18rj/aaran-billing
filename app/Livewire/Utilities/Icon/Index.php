<?php

namespace App\Livewire\Utilities\Icon;

use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{

    public function symbols()
    {
        return collect([
            'plus-slim',
            'trash',
            'save',
            'pencil',
            'chevrons-left-double',
            'chevrons-left',
            'chevrons-right',
            'chevrons-down',
            'chevrons-up',
            'printer',
            'cart',

            'cog',
            'arrow-circle-right',
            'annotation',
            'adjustments',
            'refresh',
            'check-circle',
            'exclamation-circle',
            'information-circle',
            'x-circle',
            'arrow-down-circle',
            'arrow-up-circle',
            'u-turn-down',
            'u-turn-up',
            'u-turn-left',
            'u-turn-right',
            'backward',
            'clipboard-document',
            'wifi',
            'chat',
            'share',

            'login',
            'log-out',
            'power',
            'clock',
            'home',
            'user',
            'android',
            'calculator',
            'controller',
            'database',
            'dropbox',
            'linkedin',
            'skype',
            'stack',
            'twitter',

            'twitter-x',
            'unity',
            'virus',
            'youtube',
            'zoom-in',
            'zoom-out',
            'wikipedia',
            'dots-circle-horizontal',
            'color-swatch',
            'view-grid-add',
            'scale',
            'office-building',
            'library',
            'document-report',
            'document-text',
            'receipt-refund',
            'list-bullet',
            'document-duplicate',
            'user-circle',
            'notification',
            'book-open',
            'credit-card',

            'clipboard-doc',
            'folder',
            'bulb',
            'lock-closed',
            'lock-open',
            'minus',
            'arrow-down',
            'bar-center',
            'window',
            'truck',
            'rocket',
            'shop-bag',
            'sparkles',
            'users',
            'user-group',
            'dashboard-outline',
            'mail',

            'bug-ant',
            'link',
            'apple',
            'cash',
            'pen-nib',
            'store',
            'book',
            'calender-1',
            'grid',
            'utilities',
            'profile',
            'cal-month',
            'eye-slash',
            'eye',
            'trash-bold',
            'upload',
            'download',
            'clip-board',
            'thumbs-up',
            'Check',
            'x-mark',

            'error',
            'logo',
            'message-round',
            'login-key',
            'perfomance',
            'bag-hand',
            'tablet-increase',
            'contract-give',
            'right-long-arrow',
            'photo',
            'phone',
            'event',
            'newspaper',
            'arrow-right-circle',
            'member-group',
            'gift-top',
            'chat1',
            'chat2',
            'logout',
            'locate',
            'square-left',

            'square-left',
            'angle-left',
            'angle-right',
            'add-image',
            'search-alt',
            'image-plus',
            'image-user',
            'image-circle',
            'user-pen',
            'crown',
            'pencil-bar',
            'tag',
            'r-turn-down',
            'right-arrow',
            'r-turn-up',
            'chevrons-double-r',
            'forward',
            'e-way'

        ]);
    }

    public function fillIcon(){
        return collect([
            'twitter1',
            'facebook-fill',
            'check',
            'git-hub',
            'phone1',
            'cmp',
            'folder',
            'folder1',
            'fast-time',
            'blinds',
            'headset',
            'msg-envelop',
            'eclipse',
            'square-left',
            'square-right',
            'angle-right',
            'angle-left',
            'paper-clip',

            'dot-horizontal',
            'dot-vertical',
            'home',
            'exclamation-circle',
            'exclamation-triangle',
            'plus-circle',
            'info-circle',
            'minus-circle',
            'play-circle',
            'pause-circle',
            'question-circle',
            'shield-check',
            'x-circle',
            'check-circle',
            'back-space',
            'photo',
            'gif',

            'gift',
            'microphone',
            'megaphone',
            'pencil',
            'cmp1',
            'dashboard',
            'git-new',
            'fb-round',
            'back-space1',
            'forward-double',
            'backward-double',
            'bell-alert',
            'bell-slash',
            'bell-snooze',
            'bell',
            'bookmark',
            'bookmark-square',
            'bars-4',
            'bars-up',
            'bars-down',

            'bars-3',
            'arrows-out',
            'arrows-in',
            'clipboard-check',
            'clipboard-doc',
            'play-pause',
            'pause',
            'user-circle',
            'stop-circle',
            'speaker-wave',
            'no-symbol',
            'printer',
            'cart',
            'shopping-bag',
            'folder-plus',
            'folder-minus',
            'rupee-circle',
            'eye-dropper',
            'square-plus',
            'calender-days',
            'calender-date',
            'chart-square',
            'thumb-up',

            'ascend',
            'descend',
            'cube',
            'equals',
            'link',
            'language',
            'news-paper',
            'rss',
            'signal',
            'square',
            'tag',
            'user-circle',
            'user-group',
            'users',
            'colour-swatch',
            'wifi',
            'window',
            'trash',

            'arrow-cir-l',
            'arrow-cir-r',
            'arrow-circle-down',
            'arrow-circle-up',
            'chevron-down',
            'chevron-left',
            'chevron-right',
            'chevron-up',
            'chevron-d-down',
            'chevron-d-left',
            'chevron-d-right',
            'chevron-d-up',
            'arrow-up-r',
            'arrow-up-l',
            'turn-down-l',
            'turn-down-r',
            'cube',
            'hand-right',
            'list-menu',
            'tag-menu',
            'folder-rupee',
            'e-inv',
            'e-way',
        ]);
    }

    public function getList()
    {
        return $this->symbols();
    }

    public function getList1()
    {
        return $this->fillIcon();
    }

    public function render()
    {
        return view('livewire.utilities.icon.index')->with([
            'list' => $this->getList(),'fill' => $this->getList1()
        ]);
    }
}

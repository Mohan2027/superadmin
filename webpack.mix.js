let mix = require('laravel-mix');

mix.styles([
    'resources/css/style.bundle.css',
        'resources/plugins/global/plugins.bundle.css'
], 'public/css/app.css')

.scripts([
    'resources/plugins/global/plugins.bundle.js',
    'resources/js/scripts.bundle.js',
    'resources/plugins/global/plugins.bundle.js',
    'resources/js/widgets.bundle.js',
    'resources/js/custom/apps/chat/chat.js',
    'resources/js/custom/utilities/modals/upgrade-plan.js',
    'resources/js/custom/utilities/modals/users-search.js',
    'resources/plugins/custom/datatables/datatables.bundle.js',
    'resources/plugins/custom/vis-timeline/vis-timeline.bundle.js',
    'resources/js/custom/pages/user-profile/general.js',
    'resources/js/custom/account/api-keys/api-keys.js',
    'resources/js/custom/utilities/modals/create-campaign.js'
], 'public/js/app.js')


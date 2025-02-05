<div class="frontbar">
    <div class="frontbar__header">
        <button type="button">
            <span class="sr-only">Перейти к меню действий</span>
            <svg width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
        </button>
    </div>

    <div class="frontbar__inner">
        <ul class="frontbar-menu frontbar-menu--left">
            <li><a href="[[+manager_url]]" target="_blank">ADM</a></li>
            <li class="frontbar-dropdown">
                <button type="button">
                    <svg width=".8em" height=".8em" viewBox="0 0 492.493 492"><path d="M304.14 82.473 33.165 353.469a10.799 10.799 0 0 0-2.816 4.949L.313 478.973a10.716 10.716 0 0 0 2.816 10.136 10.675 10.675 0 0 0 7.527 3.114 10.6 10.6 0 0 0 2.582-.32l120.555-30.04a10.655 10.655 0 0 0 4.95-2.812l271-270.977zM476.875 45.523 446.711 15.36c-20.16-20.16-55.297-20.14-75.434 0l-36.949 36.95 105.598 105.597 36.949-36.949c10.07-10.066 15.617-23.465 15.617-37.715s-5.547-27.648-15.617-37.719zm0 0" fill="currentColor"></path></svg>
                    Изменить
                    <svg width="1em" height="1em" viewBox="0 0 16 16"><path d="M3.204 5h9.592L8 10.481zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659" fill="currentColor"/></svg>
                </button>
                <div class="frontbar-dropdown-list">
                    <ul>
                        <li><a href="[[+update_url]]" target="_blank">Содержание</a></li>
                        [[+showTemplate:is=`1`:then=`
                            <li><a href="[[+template_url]]" target="_blank">Шаблон</a></li>
                        `]]
                    </ul>
                </div>
            </li>
            <li class="frontbar-dropdown">
                <button type="button">
                    <svg width=".8em" height=".8em" viewBox="0 0 512 512"><path d="M467 211H301V45c0-24.853-20.147-45-45-45s-45 20.147-45 45v166H45c-24.853 0-45 20.147-45 45s20.147 45 45 45h166v166c0 24.853 20.147 45 45 45s45-20.147 45-45V301h166c24.853 0 45-20.147 45-45s-20.147-45-45-45z" fill="currentColor"/></svg>
                    Создать
                    <svg width="1em" height="1em" viewBox="0 0 16 16"><path d="M3.204 5h9.592L8 10.481zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659" fill="currentColor"/></svg>
                </button>
                <div class="frontbar-dropdown-list">
                    <ul>
                        <li><a href="[[+create_url]]&amp;class_key=modDocument" target="_blank">Документ</a></li>
                        <li><a href="[[+create_url]]&amp;class_key=modWebLink" target="_blank">Ссылку</a></li>
                        <li><a href="[[+create_url]]&amp;class_key=modSymlink" target="_blank">Симлинк</a></li>
                        <li><a href="[[+create_url]]&amp;class_key=modStaticResource" target="_blank">Статичный ресурс</a></li>
                    </ul>
                </div>
            </li>

            [[+showSettings:is=`1`:then=`
                <li><a href="[[+settings_url]]"><span class="glyphicon glyphicon-cog" style="font-size:0.8em;" target="_blank"></span> Настройки</a></li>
            `]]
        </ul>

        [[+showProfile:is=`1`:then=`
        <ul class="frontbar-menu frontbar-menu--right">
            <li class="frontbar-dropdown">
                <button type="button">
                    <span class="username">[[+username]]</span>
                    <svg width="1em" height="1em" viewBox="0 0 16 16"><path d="M3.204 5h9.592L8 10.481zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659" fill="currentColor"/></svg>
                </button>
                <div class="frontbar-dropdown-list">
                    <ul>
                        <li class="frontbar-avatar">
                            <img src="[[+gravatar]]" width="32" alt="[[+fullname]]">
                        </li>
                        <li><a href="[[+profile_url]]" target="_blank">Аккаунт</a></li>
                        <li><a href="[[+message_url]]" target="_blank">Сообщения</a></li>
                        <li><a href="[[+logout_url]]" target="_blank">Выход</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        `]]
    </div>
</div>
@vite([
    'resources/js/frontbar.js',
    'resources/css/frontbar.scss'
])

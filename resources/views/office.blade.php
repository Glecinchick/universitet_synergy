@extends('hophey')

@section('one_piece')Личный кабинет@endsection

@section('main_content')

    <div id="page_info_wrap" class="page_info_wrap "><div class="page_top">
            <div class="_profile_online profile_online"><div class="profile_online_lv"></div> </div>
            <h1 class="page_name">Олжас  Темиржанов</h1>
            <div class="page_current_info" id="page_current_info"><div id="currinfo_editor" class="page_status_editor clear" onclick="cancelEvent(event)">
                    <div class="editor">
                        <div class="page_status_input_wrap _emoji_field_wrap">
                            <div class="emoji_smile_wrap  _emoji_wrap">
                                <div class="emoji_smile _emoji_btn" role="button" title="Используйте TAB, чтобы быстрее открывать смайлы" onmouseenter="return Emoji.show(this, event);" onmouseleave="return Emoji.hide(this, event);" onclick="return cancelEvent(event);" aria-label="Добавить эмодзи или стикер">
                                    <div class="emoji_smile_icon"></div>
                                </div>
                            </div>
                            <div class="page_status_input" id="currinfo_input" contenteditable="true" role="textbox"></div>
                        </div>
                    </div>
                </div>
                <div id="currinfo_wrap" onclick="return Page.infoEdit();" tabindex="0" role="button">
                    <span id="current_info" class="current_info"><span class="my_current_info"><span class="current_text">Ты за кого меня держишь!</span></span></span>
                </div>
                <div id="currinfo_fake" style="display: none"><span class="my_current_info"><span class="current_text">Ты за кого меня держишь!</span></span></div></div>
        </div><div class="profile_info profile_info_short" id="profile_short">
            <div class="clear_fix profile_info_row ">
                <h3 class="label fl_l">День рождения:</h3>
                <div class="labeled"><a href="/search?c[section]=people&amp;c[bday]=4&amp;c[bmonth]=9">4 сентября</a> <a href="/search?c[section]=people&amp;c[byear]=2004">2004 г.</a></div>
            </div><div class="clear_fix profile_info_row ">
                <h3 class="label fl_l">Город:</h3>
                <div class="labeled"><a href="/search?c[name]=0&amp;c[section]=people&amp;c[country]=4&amp;c[city]=284">Караганда</a></div>
            </div><div class="clear_fix profile_info_row ">
                <h3 class="label fl_l">Место учёбы:</h3>
                <div class="labeled"><a href="/search?c[name]=0&amp;c[section]=people&amp;c[school_country]=4&amp;c[school_city]=20641&amp;c[school]=25451">Школа № 16</a></div>
            </div><div class="profile_more_info">
                <a class="profile_more_info_link" onclick="Profile.toggleInfo(this)">
                </a>
            </div>
        </div>
        <div class="profile_info profile_info_full" id="profile_full">
            <div class="profile_info_block clear_fix">
                <div class="profile_info_header_wrap">
                    <a class="profile_info_edit" href="/edit?act=education">Редактировать</a>
                    <h2 class="profile_info_header">Образование</h2>
                </div>
                <div class="profile_info">
                    <div class="clear_fix profile_info_row block">
                        <h3 class="label fl_l">Школа:</h3>
                        <div class="labeled"><a href="/search?c[name]=0&amp;c[section]=people&amp;c[school_country]=4&amp;c[school_city]=20641&amp;c[school]=25451">Школа № 16</a><br>Темиртау</div>
                    </div>
                </div>
            </div><div class="profile_info_block clear_fix">
                <div class="profile_info_header_wrap">
                    <a class="profile_info_edit" href="/edit?act=interests">Редактировать</a>
                <div class="profile_info">
                    </a>
                    <div class="clear_fix miniblock" style="display: none">
                        <div class="label fl_l">&nbsp;</div>
                        <div class="labeled" id="profile_all_groups"></div>
                    </div>
                </div>
            </div>
        </div></div>

@endsection

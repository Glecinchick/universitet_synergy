@extends('hophey')

@section('one_piece')Регистрация@endsection

@section('main_content')
    <h1>Регистрация</h1>
    <div class="inline form_left"><div class="form-item"><label for="login">ФИО<span class="form-required" title="This field is required.">*</span></label><input data-validation="[NOTEMPTY]" data-validation-message="Поле ФИО не может быть пустым." data-validation-regex="/^[a-z0-9_-]{3,15}$/i" data-validation-regex-message="Поле должно содержать от 3 до 15 символов. Можно использовать латинские буквы, цифры, символ нижнего подчёркивания и дефис." id="login" name="login" class="form-text" size="40" maxlength="15" type="text" value="" placeholder=""></div>
        <div class="form-item"><label for="email">E-mail<span class="form-required" title="This field is required.">*</span></label><input data-validation="[NOTEMPTY, EMAIL]" data-validation-message="Некорректный E-mail" id="email" name="email" class="form-text" size="40" maxlength="400" type="text" value="" placeholder=""></div>
        <div class="inline form_right"><div class="form-item"><label for="password1">Пароль<span class="form-required" title="This field is required.">*</span></label><input data-validation="[NOTEMPTY]" data-validation-message="Введённый пароль недостаточно сложен. Используйте несколько слов, цифры, заглавные буквы." data-password-strength-values="[&quot;\u043e\u0447\u0435\u043d\u044c \u0441\u043b\u0430\u0431\u044b\u0439&quot;,&quot;\u0441\u043b\u0430\u0431\u044b\u0439&quot;,&quot;\u0441\u0440\u0435\u0434\u043d\u0438\u0439&quot;,&quot;\u0441\u0438\u043b\u044c\u043d\u044b\u0439&quot;,&quot;\u043e\u0447\u0435\u043d\u044c \u0441\u0438\u043b\u044c\u043d\u044b\u0439&quot;]" data-validation-regex="/^(?=.*\d)(?=.*\p{Lu})(?=.*\p{Ll}).{8,}$/um" data-validation-regex-message="Введённый пароль недостаточно сложен. Используйте несколько слов, цифры, заглавные буквы." id="password1" name="password1" class="form-password withIcon" size="20" maxlength="400" type="password" value=""><i class="icon eye eye-closed"></i></div><div class="form-item"><label for="password2">
                    Паспортные данные<span class="form-required" title="This field is required.">*</span></label><input data-validation="[V==password1]" data-validation-message="Пароли не совпадают." id="password2" name="password2" class="form-password withIcon" size="20" maxlength="400" type="password" value=""><i class="icon eye eye-closed"></i></div>
            <div class="form-item"><input id="signup" name="signup" class="form-submit center button" value="Зарегистрироваться" type="submit"></div><p class="center row"><a href="/" class="button shadow"></div></div>
@endsection

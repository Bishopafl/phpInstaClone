@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" style="height:155px;" src="https://instagram.ftpa1-1.fna.fbcdn.net/v/t51.2885-19/s320x320/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.ftpa1-1.fna.fbcdn.net&_nc_ohc=8EAnBgzIl20AX_1KCyL&oh=3dda8354b0d549ed6410222a2916331b&oe=5EB65EBE" alt="">
        </div>
        <div class="col-7 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"> <strong>289</strong> posts</div>
                <div class="pr-5"> <strong>43.3k</strong> followers</div>
                <div class="pr-5"> <strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title ?? '' }}</div>
            <div>{{ $user->profile->description ?? '' }}</div>
            <div><a href="#" target="_blank" rel="noopener noreferrer">{{ $user->profile->url ?? '' }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://lh3.googleusercontent.com/J3_JT7LTVT3KtBa7JFYScqGpweKWM0ecXlmEGHAJvmBqb4VN7MStUK3jrQk_kZz9z--szyQWVyM0mDlqsMrY7f9ZG4MpRNK_bVZ3C4bTeySxP-r9DaIlR5IAjVnOrFQdyB5sJzf8IsPYnwIppQedXaRa6JxvK39XiFbcarwf7i8vjj4sikkaRA7QT2WpvwQ62CMORovNAir3glbJrj3k1U3icF91UsS1EMA-jLujtWf8v6fwA0ybQNo-PlRpAykUNpxEt2VKcGQs9d-D5kp1vR-nsPU6LvUCtVgonu1FXKU-rYRrDOmT5QZrYM76srT02oUrhoGGsurktiYCSfC8CqZdtEdNyrZ34O1jKCemv2xGAeJbwLD4NlJ6RuyBxm60mq15QIFBr4sOJSbuGgu9n5dir4W9XtZ2AWaTsNHxPMkVpRidbtFYINzdn14txzFAoKlko1cX8n9y1lXZDW5R_7iCsOOtoa9BvP94BM5zN_rootVqRUm09EN4-fHa2MOVgCvDGZ1DhQkqFVswIk5Ze_IQ4uJ6YUY8DI85yKERJbSX_zvHZXm6WYTwtZY0LDOSgOS6mISwDLPXhMFOwvWPafQ6ByyFVvkrWzIGX91i1up7g_KoUKLUMRhPJFvNj-malw2d-fsyQvTacYaaKO3NrmCojTTZfyGUjsaEj6s8MqB-_daOV_ZMUT8t8dkQpQ=w283-h212-no" class="w-100">
        </div>  
        <div class="col-4">
            <img src="https://lh3.googleusercontent.com/J3_JT7LTVT3KtBa7JFYScqGpweKWM0ecXlmEGHAJvmBqb4VN7MStUK3jrQk_kZz9z--szyQWVyM0mDlqsMrY7f9ZG4MpRNK_bVZ3C4bTeySxP-r9DaIlR5IAjVnOrFQdyB5sJzf8IsPYnwIppQedXaRa6JxvK39XiFbcarwf7i8vjj4sikkaRA7QT2WpvwQ62CMORovNAir3glbJrj3k1U3icF91UsS1EMA-jLujtWf8v6fwA0ybQNo-PlRpAykUNpxEt2VKcGQs9d-D5kp1vR-nsPU6LvUCtVgonu1FXKU-rYRrDOmT5QZrYM76srT02oUrhoGGsurktiYCSfC8CqZdtEdNyrZ34O1jKCemv2xGAeJbwLD4NlJ6RuyBxm60mq15QIFBr4sOJSbuGgu9n5dir4W9XtZ2AWaTsNHxPMkVpRidbtFYINzdn14txzFAoKlko1cX8n9y1lXZDW5R_7iCsOOtoa9BvP94BM5zN_rootVqRUm09EN4-fHa2MOVgCvDGZ1DhQkqFVswIk5Ze_IQ4uJ6YUY8DI85yKERJbSX_zvHZXm6WYTwtZY0LDOSgOS6mISwDLPXhMFOwvWPafQ6ByyFVvkrWzIGX91i1up7g_KoUKLUMRhPJFvNj-malw2d-fsyQvTacYaaKO3NrmCojTTZfyGUjsaEj6s8MqB-_daOV_ZMUT8t8dkQpQ=w283-h212-no" class="w-100">
        </div>  
        <div class="col-4">
            <img src="https://lh3.googleusercontent.com/J3_JT7LTVT3KtBa7JFYScqGpweKWM0ecXlmEGHAJvmBqb4VN7MStUK3jrQk_kZz9z--szyQWVyM0mDlqsMrY7f9ZG4MpRNK_bVZ3C4bTeySxP-r9DaIlR5IAjVnOrFQdyB5sJzf8IsPYnwIppQedXaRa6JxvK39XiFbcarwf7i8vjj4sikkaRA7QT2WpvwQ62CMORovNAir3glbJrj3k1U3icF91UsS1EMA-jLujtWf8v6fwA0ybQNo-PlRpAykUNpxEt2VKcGQs9d-D5kp1vR-nsPU6LvUCtVgonu1FXKU-rYRrDOmT5QZrYM76srT02oUrhoGGsurktiYCSfC8CqZdtEdNyrZ34O1jKCemv2xGAeJbwLD4NlJ6RuyBxm60mq15QIFBr4sOJSbuGgu9n5dir4W9XtZ2AWaTsNHxPMkVpRidbtFYINzdn14txzFAoKlko1cX8n9y1lXZDW5R_7iCsOOtoa9BvP94BM5zN_rootVqRUm09EN4-fHa2MOVgCvDGZ1DhQkqFVswIk5Ze_IQ4uJ6YUY8DI85yKERJbSX_zvHZXm6WYTwtZY0LDOSgOS6mISwDLPXhMFOwvWPafQ6ByyFVvkrWzIGX91i1up7g_KoUKLUMRhPJFvNj-malw2d-fsyQvTacYaaKO3NrmCojTTZfyGUjsaEj6s8MqB-_daOV_ZMUT8t8dkQpQ=w283-h212-no" class="w-100">
        </div>  
    </div>
</div>
@endsection

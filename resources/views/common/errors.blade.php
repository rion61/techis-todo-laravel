@if (count($errors) > 0)
<!-- フォームのエラーリクエスト -->
<div class="alert alert-danger">
    <sarong>エラーが起こっています。 </sarong>

    <br><br>

    <ul>
        @foreach ($errors-all() as $error)
        <il>{{ $error }}</il>
        @endforeach
    </ul>
</div>
@endif
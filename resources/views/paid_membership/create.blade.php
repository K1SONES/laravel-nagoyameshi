<form action="{{ route('paid-memberships.store') }}" method="post">
    @csrf
    <!-- ここにクレカの登録画面？ -->
    <button type="submit">有料会員になる</button>
</form>
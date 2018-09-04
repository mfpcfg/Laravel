<!-- Виводимо відправлений коментар з БД -->
<div class="comments">

  @foreach ($books->comments as $comment)

      <strong>

        {{ $comment->created_at->diffForHumans() }} <br>

      </strong>

      <strong>

        {{ user($comment->user_id)->name }}: &nbsp;

      </strong>

        {{ $comment->body }} <hr>

  @endforeach
</div>
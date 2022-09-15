<div class="comment">
  <div class="comment-form">
    <?php comment_form(); ?>
  </div>

  <div class="commets-list">
    <?php if( have_comments() ): ?>
    <h3>コメント</h3>
    <ol>
      <?php wp_list_comments(); ?>
    </ol>
    <?php endif; ?>
  </div>
</div>

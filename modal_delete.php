<div class="modal fade" id="modaldelete">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <p>DO YOU WANT TO DELETE THE DATA?</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <a href="user_delete.php?udelete=<?php echo $row['user_id']; ?>" type="button" class="btn btn-primary">Yes</a>
      </div>

    </div>
  </div>
</div>
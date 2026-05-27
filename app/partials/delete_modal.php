<?php if($delete_modal): ?>
<div 
  class="modal fade show"
  style="display:block; background:rgba(0,0,0,.6);"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-danger">
          Confirm Delete
        </h5>
      </div>

      <div class="modal-body text-center">
        <p>
          Are you sure you want to delete this item?
        </p>
      </div>

      <div class="modal-footer justify-content-center">
        <a 
          href="?confirm_delete=<?= $delete_data['id'] ?>&type=<?= $delete_data['type'] ?>" 
          class="btn btn-danger"
        >
          Yes, delete
        </a>

        <a 
          href="<?= strtok($_SERVER["REQUEST_URI"], '?') ?>" 
          class="btn btn-secondary"
        >
          Cancel
        </a>
      </div>

    </div>
  </div>
</div>
<?php endif; ?>
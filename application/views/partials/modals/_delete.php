<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modalDelete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="#" method="post">
                <?= _csrf() ?>
                <?= _method('delete') ?>
                <div class="modal-header">
                    <h6 class="modal-title" id="modalDelete">
                        Delete <span class="delete-title"></span>
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id">
                    <p class="lead mb-0">Are you sure want to delete <strong class="delete-label"></strong>?</p>
                    <small class="text-muted">
                        All related data will be deleted and this action might be irreversible.
                    </small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">CLOSE</button>
                    <button type="submit" class="btn btn-danger btn-sm" data-toggle="one-touch">
                        DELETE
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
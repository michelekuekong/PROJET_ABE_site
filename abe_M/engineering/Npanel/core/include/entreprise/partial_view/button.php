<div class="btn-group">
    <button type="button" class="btn btn-primary btn-sm">
        <a style="color:#fff" href="index.php?action=<?= $action?>&saction=Detail&id=<?= $value->getId() ?><?php if(!empty($type))echo'&type='.$type ?>">
             View detail
        </a>
    </button>
</div><!-- /btn-group -->
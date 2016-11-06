<div id="advert-list">
    <div class="pagination-wrapper text-center">
        {{ $adverts->links() }}
        <?php $from = ($adverts->currentPage() - 1) * $adverts->perPage() + 1; ?>
        <?php $to = ($adverts->currentPage() - 1) * $adverts->perPage() + $adverts->count(); ?>
        <div class="text-muted">{{ $from }}-{{ $to }} of {{ $adverts->total() }}</div>
    </div>

    @each('adverts._advert_list_item', $adverts, 'advert', 'adverts._advert_list_empty')

    <div class="pagination-wrapper text-center">
        {{ $adverts->links() }}
        <?php $from = ($adverts->currentPage() - 1) * $adverts->perPage() + 1; ?>
        <?php $to = ($adverts->currentPage() - 1) * $adverts->perPage() + $adverts->count(); ?>
        <div class="text-muted">{{ $from }}-{{ $to }} of {{ $adverts->total() }}</div>
    </div>
</div>

<div class="d-flex justify-content-between flex-wrap gap-4">
    <div>
        <span>Showing {{ $items->firstItem() }} to {{ $items->lastItem() }} out of {{ $items->total() }} items.</span>
    </div>

    <div>
        {{ $items->withQueryString()->links() }}
    </div>
</div>
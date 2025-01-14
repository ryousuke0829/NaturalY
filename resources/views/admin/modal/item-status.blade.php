@if ($item->trashed())
    {{-- Activate --}}
    <div class="modal fade" id="activate-item-{{ $item->id }}">
        <div class="modal-dialog">
            <div class="modal-content border-danger">
                <div class="modal-header border-danger">
                    <h3 class="h5 modal-title text-danger">
                        <i class="fa-solid fa-user-check"></i> Activate Item
                    </h3>
                </div>

                <div class="modal-body">
                    Are you sure you want to activate <span class="fw-bold">{{ $item->name }}</span>?
                </div>

                <div class="modal-footer border-0">
                    <form action="{{ route('admin.item.activate', $item->id) }}" method="post">
                        @csrf
                        @method('PATCH')

                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancel</button>

                        <button type="submit" class="btn btn-danger btn-sm">Activate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@else
    {{-- Deactivate --}}
    <div class="modal fade" id="deactivate-item-{{ $item->id }}">
        <div class="modal-dialog">
            <div class="modal-content border-secondary">
                <div class="modal-header border-secondary">
                    <h3 class="h5 modal-title text-secondary">
                        <i class="fa-solid fa-user-slash"></i> Deactivate Item
                    </h3>
                </div>

                <div class="modal-body">
                    Are you sure you want to deactivate <span class="fw-bold">{{ $item->name }}</span>?
                </div>

                <div class="modal-footer border-0">
                    <form action="{{ route('admin.item.deactivate', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>

                        <button type="submit" class="btn btn-secondary btn-sm">Deactivate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif
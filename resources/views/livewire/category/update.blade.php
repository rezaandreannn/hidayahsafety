<form wire:submit.prevent="update">
    <input type="hidden" wire:model="$idCategory">
    <div class="item form-group">
        <label class="col-form-label label-align" for="first-name">Nama <span class="required">*</span>
        </label>
        <div class="col ">
            <input wire:model="name" type="text" id="name" required="required" class="form-control ">
        </div>
    </div>
    {{-- {{ $idCategory }} --}}
    <button type="submit" class="btn btn-primary mt-1" style="float: right">Edit</button>
</form>

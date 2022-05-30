<div>
    <form wire:submit.prevent="update">
        <input type="hidden" wire:model="userId">
        <div class="form-group">
            <label for="name">Name</label>
            <input wire:model="name" type="text" name="" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input wire:model="email" type="text" name="" class="form-control" id="email">
        </div>
        {{-- <input wire:model="name" type="text" class="form-control" placeholder="update username"> --}}
        {{-- <input wire:model="email" type="text" class="form-control" placeholder="update email"> --}}
        <button type="submit" class="btn btn-primary mt-1" style="float: right">Submit</button>
    </form>

</div>

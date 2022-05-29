<div>
    <form wire:submit.prevent="update">


        <input wire:model="name" type="text" class="form-control" placeholder="update username">
        <input wire:model="email" type="text" class="form-control" placeholder="update email">
        <button class="btn btn-primary mt-1">Submit</button>
    </form>

</div>

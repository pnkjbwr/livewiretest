<div>
    <h1>Livewire Calculator!</h1>

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="firstno">First No</label>
                    <input type="text" class="form-control" id="firstno" wire:model="firstno">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="secondno">Second No</label>
                    <input type="text" class="form-control" id="secondno" wire:model="secondno">
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="result">Result</label>
                <input type="text" class="form-control" id="result"  wire:model="result" readonly>
            </div>
        </div>
        <button class="btn btn-primary" wire:click="plus">Plus</button>
        <button class="btn btn-primary" wire:click="minus">Minus</button>
        <button class="btn btn-primary" wire:click="resetfields">Reset</button>

</div>

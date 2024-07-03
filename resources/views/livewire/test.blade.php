<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Simple Calculator</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="number1" class="form-label">Number 1</label>
                        <input type="text" class="form-control" id="number1" wire:model="number1" placeholder="Enter number 1">
                    </div>
                    <div class="mb-3">
                        <label for="action" class="form-label">Action</label>
                        <select class="form-select" id="action" wire:model="action">
                            <option>+</option>
                            <option>-</option>
                            <option>*</option>
                            <option>%</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="number2" class="form-label">Number 2</label>
                        <input type="text" class="form-control" id="number2" wire:model="number2" placeholder="Enter number 2">
                    </div>
                    <button type="button" class="btn btn-primary w-100" wire:click="calculate" {{ $disabled ? 'disabled' : '' }}>
                        Calculate
                    </button>
                    <p class="mt-3 text-center">{{ $result }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
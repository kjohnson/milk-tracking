<div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4 flex flex-col gap-4">

    <form wire:submit="save">

        <div>
            <x-label for="amount" value="{{ __('Amount') }}" />
            <x-input id="amount" class="block mt-1 w-full" type="number" step="0.01" name="amount" wire:model="amount" required />
            <div>
                @error('amount') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>

        <div>
            <x-label for="storageType" value="{{ __('Storage Type') }}" />
            <x-select id="storageType" class="block mt-1 w-full" name="storageType" wire:model="storageType" required>
                <option value="fridge">Refrigerated</option>
                <option value="frozen">Frozen</option>
                <option value="thawed">Thawed</option>
            </x-select>
            <div>
                @error('storageType') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>

        <div>
            <x-label for="notes" value="{{ __('Notes') }}" />
            <x-textarea id="notes" rows="5" class="block mt-1 w-full" name="notes" wire:model="notes"></x-textarea>
        </div>

        <div class="flex mt-4">
            <x-button type="submit">
                {{ __('Save Task') }}
            </x-button>
        </div>

    </form>
</div>

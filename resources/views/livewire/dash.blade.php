<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

    {{-- <button class="btn mb-8" wire:click="toggle">Switch to {{ $brand == 'default' ? 'Hub Theme' : 'Default Theme' }}</button> --}}

    <div class="flex space-x-6 mb-20">

        <div class="flex flex-col border p-4 rounded-lg border-gray-300">

            <h2 class="text-gray-600 text-xl mb-4">Explicit Coloring</h2>

            <div class="text-gray-300">Text Gray 300</div>
            <div class="text-gray-400">Text Gray 400</div>
            <div class="text-gray-600">Text Gray 600</div>
            <div class="text-gray-900">Text Gray 900</div>
            <div class="text-blue-600">Text Blue 600</div>
            <div class="text-slate-400">Text Slate 400</div>
            <div class="text-green-600">Text Green 600</div>
            <div class="text-red-600">Text Red 600</div>
            <div class="text-yellow-600">Text Yellow 600</div>
            <div class="text-blue-300">Text Blue 300</div>

        </div>

        <div class="flex flex-col border p-4 rounded-lg border-gray-300">

            <h2 class="text-primary text-xl mb-4 brand-default">Default Branding</h2>

            <div class="text-light">Text Light</div>
            <div class="text-muted">Text Muted</div>
            <div class="text-base">Text Base</div>
            <div class="text-dark">Text Dark</div>
            <div class="text-primary">Text Primary</div>
            <div class="text-secondary">Text Secondary</div>
            <div class="text-success">Text Success</div>
            <div class="text-danger">Text Danger</div>
            <div class="text-warning">Text Warning</div>
            <div class="text-info">Text Info</div>

        </div>

        <div class="brand-{{ $brand }} flex flex-col border p-4 rounded-lg border-gray-300">

            <h2 class="text-primary text-xl mb-2 brand-default">Custom Branding</h2>

            <div class="mb-2">
                {{-- <label for="brand" class="block text-sm font-medium leading-6 text-gray-900">Select Brand</label> --}}
                <select id="brand" name="brand" wire:model="brand"
                    class="block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @foreach ($brands as $b)
                        <option wire:click="setBrand('{{ $b }}')">{{ $b }}</option>
                    @endforeach
                </select>
            </div>

            {{ $brand }}

            <div class="text-light">Text Light</div>
            <div class="text-muted">Text Muted</div>
            <div class="text-base">Text Base</div>
            <div class="text-dark">Text Dark</div>
            <div class="text-primary">Text Primary</div>
            <div class="text-secondary">Text Secondary</div>
            <div class="text-success">Text Success</div>
            <div class="text-danger">Text Danger</div>
            <div class="text-warning">Text Warning</div>
            <div class="text-info">Text Info</div>

        </div>

    </div>

    <x-colors />

</div>

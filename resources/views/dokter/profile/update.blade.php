<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome Dokter :name', ['name' => Auth::user()->name]) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('profiledokter.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Specialization -->
                            <div>
                                <label for="spesialis_id" class="block text-sm font-medium text-gray-700">Spesialisasi</label>
                                <select name="spesialis_id" id="spesialis_id" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="">-- Pilih Spesialisasi --</option>
                                    @foreach ($spesialisasis as $spesialis)
                                    <option value="{{ $spesialis->id }}" {{ old('spesialis_id') == $spesialis->id ? 'selected' : '' }}>
                                        {{ $spesialis->nama_spesialisasi }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Years of Experience -->
                            <div>
                                <label for="years_of_experience" class="block text-sm font-medium text-gray-700">{{ __('Years of Experience') }}</label>
                                <input type="number" name="years_of_experience" id="years_of_experience" value="{{ old('years_of_experience') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                            <!-- Price -->
                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700">{{ __('Consultation Price') }}</label>
                                <input type="text" name="price" id="price" value="{{ old('price') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>

                            <!-- Alumni -->
                            <div>
                                <label for="alumni" class="block text-sm font-medium text-gray-700">{{ __('Alumni') }}</label>
                                <input type="text" name="alumni" id="alumni" value="{{ old('alumni') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                            <!-- Practice Location -->
                            <div>
                                <label for="practice_location" class="block text-sm font-medium text-gray-700">{{ __('Practice Location') }}</label>
                                <input type="text" name="practice_location" id="practice_location" value="{{ old('practice_location') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>

                            <!-- STR Number -->
                            <div>
                                <label for="str_number" class="block text-sm font-medium text-gray-700">{{ __('STR Number') }}</label>
                                <input type="text" name="str_number" id="str_number" value="{{ old('str_number') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>

                            <div>
                                <label for="gambar" class="block text-sm font-medium text-gray-700">Foto Dokter</label>
                                <input type="file" name="gambar" id="gambar" accept="image/*"
                                    class="mt-1 block w-full text-sm text-gray-700
               file:mr-4 file:py-2 file:px-4
               file:rounded-md file:border-0
               file:text-sm file:font-semibold
               file:bg-indigo-50 file:text-indigo-700
               hover:file:bg-indigo-100"
                                    onchange="previewImage(event)">

                                <div class="mt-4">
                                    <img id="preview" class="w-40 h-40 object-cover rounded-lg border border-gray-300" style="display: none;" />
                                </div>
                            </div>

                        </div>

                        <div class="mt-6 flex justify-end space-x-4">
                            <!-- Batal Button -->
                            <a href="{{ route('profiledokter.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 transition">
                                {{ __('Cancel') }}
                            </a>

                            <!-- Submit Button -->
                            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">
                                {{ __('Create Profile') }}
                            </button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('preview');
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none';
                preview.src = '';
            }
        }
    </script>
</x-app-layout>
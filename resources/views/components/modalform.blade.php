<div class="flex justify-end">
                    <button type="button" onclick="openModal('{{ $dokter->id }}')" class="bg-[#095D7E] text-white px-10 py-1 rounded-md hover:bg-[#07445c] transition-all">
                        Reservasi
                    </button>

                </div>

                
<!-- Modal -->
<div id="modal-reservasi" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
    <div class="bg-white p-6 rounded-md w-full max-w-md relative">
        <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-black">✕</button>

        <h2 class="text-xl font-bold mb-4">Buat Reservasi</h2>

        <form action="{{ route('reservasi.store') }}" method="POST">
            @csrf
            <input type="hidden" id="modal-profile-id" name="profile_id">
            <input type="hidden" name="name" value="{{ Auth::user()->name }}">

            <label for="reservation_date" class="block mb-2 font-semibold">Tanggal Reservasi</label>
            <input type="date" name="reservation_date" required class="w-full border px-3 py-2 rounded-md mb-4">

            <div class="flex justify-end">
                <button type="button" onclick="closeModal()" class="mr-2 px-4 py-2 bg-gray-300 rounded">Batal</button>
                <button type="submit" class="px-4 py-2 bg-[#095D7E] text-white rounded hover:bg-[#07445c]">Kirim</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal(profileId) {
        document.getElementById('modal-profile-id').value = profileId;
        document.getElementById('modal-reservasi').classList.remove('hidden');
        document.getElementById('modal-reservasi').classList.add('flex');
    }

    function closeModal() {
        document.getElementById('modal-reservasi').classList.add('hidden');
        document.getElementById('modal-reservasi').classList.remove('flex');
    }
</script>
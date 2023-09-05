<div>
    <input type="search" wire:model.live="search">
    <table>
        <tr>
            <th>Nama</th>
        </tr>
        @foreach ($users as $user)
            <x-tr>{{-- error when using blade component --}}
                <td>{{ $user->name }}</td>
            </x-tr>

            {{-- not error when using plain HTML tag like this --}}
            {{-- <tr>
                <td>{{ $user->name }}</td>
            </tr> --}}
        @endforeach
    </table>
</div>

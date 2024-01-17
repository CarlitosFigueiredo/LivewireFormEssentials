<div>
    <h1 class="mb-4 text-2xl text-slate-700 font-semibold">Update your profile...</h1>

    <form wire:submit="save" class="min-w-[30rem] flex flex-col gap-6 bg-white rounded-lg shadow p-6">
        <div class="flex flex-col gap-2">
            <h3 class="font-medium text-slate-700 text-base">Username</h3>

            <input wire:model="username" class="px-3 py-2 border border-slate-300 rounded-lg" placeholder="Username...">
        </div>

        <div class="flex flex-col gap-2">
            <h3 class="font-medium text-slate-700 text-base">Bio</h3>

            <textarea wire:model="bio" rows="4" class="px-3 py-2 border border-slate-300 rounded-lg" placeholder="A little bit about yourself..."></textarea>
        </div>

        <div class="flex">
            <button type="submit" class="w-full bg-blue-500 py-3 px-8 rounded-lg text-white font-medium">Save</button>
        </div>
    </form>
</div>

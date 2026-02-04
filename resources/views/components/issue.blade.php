<div id="issue" class="hidden">
    <p>Sorry that you've noticed an issue but thank you for making us aware!</p>
    <p>Please describe the issue in as much detail as possible.</p>

    <form>
        @csrf

        <textarea
            class="border border-gray-500 w-full h-48 p-2"
            name="description"
        >Hello, I am having issues with the raga {{ $raga->name }} ({{$raga->id}}). The issue is...</textarea>

        <input
            class="border border-orange-200 bg-orange-100 p-2 text-amber-700 cursor-pointer"
            type="submit"
            hx-post="{{ route('issue') }}"
            hx-target="#issue"
            hx-swap="outerHTML"
            value="Submit Issue"
        />
    </form>

</div>

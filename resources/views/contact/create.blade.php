<x-layout>

    <h1 class="text-center font-extrabold text-transparent text-8xl bg-clip-text bg-gradient-to-r from-sky-100 via-[#80A5AB] to-[#80A5AB]
        my-10">
        Let's Plan an Adventure
    </h1>
    <h2 class="text-center text-sky-200 text-4xl font-bold mb-10">Send me your quest request</h2>
    <div class="flex justify-center items-center">
        <div class=" w-1/2   bg-gradient-to-t from-[#1F2425] to-[#080808] rounded-3xl border border-zinc-700">
            <div class="mb-6 form-group">
                <form method="POST" action="/contact">
                    @csrf
                    <div class="flex flex-row  px-10 gap-x-3">
                        <div class="w-full">
                            <label for="name" class="block mb-2 uppercase font-bold text-l text-sky-200  mt-3">
                                Name
                            </label>
                            <input class="border border-zinc-700 p-2 rounded w-full text-sky-100 bg-transparent  "
                                   type="text"
                                   name="name"
                                   id="name"
                                   required
                            >
                        </div>
                        <div class="w-full" >
                            <label for="Email" class="block mb-2 uppercase font-bold text-l text-sky-200  mt-3">
                                Email
                            </label>
                            <input class="border border-zinc-700 p-2 rounded w-full bg-transparent text-sky-200 "
                                   type="email"
                                   name="email"
                                   id="email"
                                   required
                            >
                        </div>
                    </div>
                    <div class="mb-6 mx-10">
                        <label for="message" class="block mb-2 uppercase font-bold text-l text-sky-200 mt-3 ">
                            Message
                        </label>
                        <textarea class="border border-zinc-700 p-2 rounded w-full resize-none bg-transparent text-sky-200 "
                               type="textarea"
                               name="message"
                               id="message"
                                  rows="5"
                               required></textarea>

                    </div>
                    <div class="mb-6 flex justify-center items-center">
                                    <button type="submit" class=" text-sky-200 rounded py-2 px-4">
                                        Submit
                                    </button>
                                </div>

                </form>
            </div>
        </div>
    </div>

</x-layout>

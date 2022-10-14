<x-layout>
    <x-WIlNavBar />
    <h1 class="text-center font-extrabold text-transparent text-8xl bg-clip-text bg-gradient-to-r from-sky-100 via-[#80A5AB] to-[#80A5AB]
        my-10">
        WIL Placement Report
    </h1>
    <h2 class="text-center text-sky-200 text-4xl font-bold mb-10">Additional Artefact </h2>
    <h2 class="text-center text-sky-200 text-2xl font-bold mb-10">48-Hour Game Challenge</h2>

    <div class="justify-center items-center mx-40 my-20">
        <div>

            <img class="mx-auto max-w-xl" src="{{asset("images/orangeRichard.png")}}" alt="image description">

        </div>
        <div class=" min-h-36 flex flex-row justify-center items-center my-20 mx-10 gap-10 shadow-2xl   ">
            <div >
                <img src="{{asset("images/console.png")}}" class="overflow-visible">
            </div>
            <div class="  w-1/2 mb-5">
                <h1 class="font-extrabold text-transparent text-3xl bg-clip-text bg-gradient-to-r from-sky-100 via-[#80A5AB] to-[#80A5AB]">
                     Context
                </h1>
                <p class="font-l text-sky-100">
                    The 48-hour game challenge was a student run event where we have the chance to create a game from scratch over 48 hours. We are given 3 words at the start of the challenge to base the game on, in this case they were Orange, Switch, Space. All the development had to be done rapidly in a cooptative team.
                </p>
            </div>
        </div>

        <div class=" min-h-36 flex flex-row justify-center items-center my-20 mx-10 gap-10 shadow-2xl   ">

            <div class="  w-1/2 mb-5">
                <h1 class="font-extrabold text-transparent text-3xl bg-clip-text bg-gradient-to-r from-sky-100 via-[#80A5AB] to-[#80A5AB]">
                    Action
                </h1>
                <p class="font-l text-sky-100">
                    In the team I took the role of AI programmer and lead programmer, working with two other programmers on the project. The AI I created was for the enemies and environment control. The rooms would change as needed, and enemies would have to spawn dynamically in certain locations and have different behaviours depending on the enemy type.  As the lead programmer I was in charge of managing the merging of the code and bug fixing. This was done using GIT and constant communication. As it was a small team developing in a short time, most of this was managed verbally during the programming instead of reviewing merge requests.
                </p>
            </div>
            <div >
                <img src="{{asset("images/database.png")}}" class="overflow-visible">
            </div>
        </div>


        <div class=" min-h-36 flex flex-row justify-center items-center my-20 mx-10 gap-10 shadow-2xl   ">
            <div >
                <img src="{{asset("images/appDev.png")}}" class="overflow-visible">
            </div>
            <div class="  w-1/2 mb-5">
                <h1 class="font-extrabold text-transparent text-3xl bg-clip-text bg-gradient-to-r from-sky-100 via-[#80A5AB] to-[#80A5AB]">
                    Results
                </h1>
                <p class="font-l text-sky-100">
                    By the end of the 48-hour challenge we had completed the project and presented the finished game. The collaboration went smoothly between programmers as well as the team working on visual components. Given that the result was a functional game meeting the requirements of the challenge, I am very happy with the result. Improvements on the process would be using a source control that work better with the Unity3D engine, at the time this could have been collaborate.
                </p>

            </div>

        </div>
        <div class=" min-h-36 flex flex-row justify-center items-center my-20 mx-10 gap-10 shadow-2xl   ">

            <div class="  w-1/2 mb-5">
                <h1 class="font-extrabold text-transparent text-3xl bg-clip-text bg-gradient-to-r from-sky-100 via-[#80A5AB] to-[#80A5AB]">
                    Learning
                </h1>
                <p class="font-l text-sky-100">
                    My biggest takeaway from this experience was better understanding of rapid prototyping and dynamic decision making. With a short time frame, we had planning and prototyping done within 2 hours. Being able to rapidly get through this process helped greatly early on, but we had to be flexible in the project, being able to add extra or modify existing functionality. In similar projects in the future, I would definitely improve the source control method, using tools made for Unity would have helped a lot, such as Plastic SCM.
                </p>

            </div>
            <div >
                <img src="{{asset("images/database.png")}}" class="overflow-visible">
            </div>
        </div>

    </div>

</x-layout>

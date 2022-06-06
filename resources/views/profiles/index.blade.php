@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQDxAQEBAQDxUQEBAVEA8QEBUVFRAPFRUXFhgWFRUYHSggGBooGxUVIT0hJSkrLi4vFx8zODMtNygtLisBCgoKDg0OGxAQGy0fIB8wLTAxLS0tKy0tLS0tLS0tLS0tLS0tLS0tLS0tLSstLS0tLS0tLS0tLS0rLS03KzcrN//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAgIDAQAAAAAAAAAAAAAABgcBCAMEBQL/xABBEAACAQIBCAYGCQMDBQAAAAAAAQIDBBEFBgcSEyExUUFSYXGBkRQikqGx0RYjMkNTVGJywYKy4UJzwiQzZHTw/8QAGgEBAAMBAQEAAAAAAAAAAAAAAAEDBAUCBv/EACYRAQACAgIBBAIDAQEAAAAAAAABAgMRBBIhFCMxUSJBE0JhMzL/2gAMAwEAAhEDEQA/AIEADivnQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAASAAIAAAAAAAAAAAAAAABIAAgAAAAAAAAAAAAAADt5MyfVua0KFGLnOo8IpdHNt9CXSyYjfhMRMzqHWhBtpRTk3wili33JcTNSnKMtWUZQaw9WSae/sZsBmdmZb5PprcqtZr6ys1vx5Rx4RK80w5Rt6t1SpUlFzoRmq1SPOWGEPDBvxL74Otdy1X43SnaZV+wAZ2UAO3kvJ1W6qxo0YqU5Y4JyUVgt73sRGyI26gPfyjmZlGhHWqWs9VcZU8KiXsvE8Frw7O0mazHy9WpavzDAAIeAAAADktZxjUpymtaMZwc49aCknJeWIhMMSpySUnGST4ScWk/HgfLRsrRtrS7tYpQp1aNSC1VgnHVa3Ycims/sypZPntKWM7eb3N73SfVlzXaaMmCaxuPLVl401jtHmEOBnAwZ2UAAQAAAAAAAAABAfUIttJJttpJLe3J8ElzL30cZpRsaG0qRTuKyTqP8OPRTXd082QbRJm56RcO7qRxhbvCmnwlV5+BY+feciydaSqLB1KnqUIPpqNcWuS4v/JtwUisd5dHjY4rX+SzwNJOfHoqdrbS+ukvrJrfsYv/AJMpmcm222228W3vbfNma1aU5SnOTnKbbnJ8ZSfFs+DPlyTeWXNlnJbcgAKlAfdKpKMlKLcXF4xlF4NPmmfAETpK99GmdEr63lTrYOrQwUn14vhLvMZ75h0L2EqtGMaVdb1JLBVH1Zr+SGaFFL02vhw2Cx79bd/JdGB0sesmP8nXw+7i/Jqzc286c5U6kXCUJOM4vjGS4o4ixtMuR1TuKV1BYKunGp/uR4PxXwK5MGSnW2nMy06WmAAHhUGUYCCUvzBzzqZPqKnUblbzl68eOyb4zj/K72XfXo0bug4yUatOtDvUotcUaxIs3RHnS4z9ArSxjLF28pPg+mH8mvj5f62b+Ln/AKW+EOzxzdnk+6lRli4S9ajPr08fityf+TwmbBaRM3FfWclFLa0cZ0H+pLfF9klu78H0Gvr8V2Pc13rmVZ8fS3j9qOTi/jt4+AAFLMAAAAAAAAGYRbaS3ttJd73GCQZgZP8ASMp2tNrGMZupP9tNOXxSJrG5iHule1oheWaGSFZ2VGilg1FOfbUaxZTWkzLnpd/NReNO3xp0+WK+1LxfwLqzoyh6NZ3FbphTk1+5rBGtM5OTcnvbbbb6W2bOTbrWKQ38y3WsUhhgAxOcAAIAgSHMfN1393Cng9nDCVaXKCf2e98Ca1m06h7pWbTqFl6H8huhaSuJrCVy012U1uXzLBOKhSjCMYxWrGKSilwSXQfeKOtSvWNO5jp0rEIPphs9fJrn00atOWPJN6r/ALitszc2qOUYV6aqOlcQwlSx3wlDhg13l3Zy5OV1Z3Fv01aUop8p4bn54FQaNskXdPKdNujUpqkpqs5RaSWGGGPTvM+WnuR4Y89Pdjx8ojlPJ1W2rToVoOE4Pen0rmn0rtOoX7pCzTjf0HKmkq9JN0pddfhyfJ+597KDcWm00002mmsGmtzTXMy5sXSWTPhnHb/GAAVM4clCtOE41IPVlCSlBroknijjCETpMTry2VzWytG9s6NwvvIesurNbpLwaaKU0lZG9FyhU1VhCv8AWQ7G/tLz3+JLdB+U3hdWjfBwrU1+71JruxjB/wBTO5prydrW1G4S30qmq/2y3fE33/PFv6dPJ7mDanAGDA5gAAgAAAAACw9CdupX1eo1/wBu3wXY5zX8RZXqLQ0GL6y+f6aHxqFuD/pDRxo92Ei0wXWpk1x/EqQj4Y4lGMuTTc/+kt1zr/8AFlNnvlT+azmT7gADOxgAAzFN4JJttpJLi29yS7cTYXMDNxWFnCDS2tT168v1vhFdiW7z5lWaKcjK5ygpyWMLaO0wa+8e6PlvfkXzgbuLj8dnT4eLx3kINpLr3NrClfW9aUdlKMKlF74VISeG9c8WvAnLKq0x5xU3TjY05KUnKM6+G/UjHfGL7W8H4dpfmt1rLTntqk+U5zQzghlC2jXgtVr1akOpUXFd3zPbSKv0HQls7yWPq69NJfqUcX7nEnuUMu0aFehQqtwdxrbKb+y5r/Tj0MY77pEyYr9scWs9TA1/0nZKVtlOrqrCNdKrHlrPdNeax/qNgEVFpwpfW2c/01Y/2v8Ag8cmN02r5dd49qwABzXIAgAJfoqutnlWiscFVhVpvxjrL3xRbOkS12uTLpdWnrLvi8SksyZ6uUrJ/wDkU15vD+S/84qSlZ3MedGp/azdx/OOYdLi+cUw1lx4ARBhc2QABAAAAAAFm6DamFa8jzp0X7Mpr+Ssid6G7rUylKD++t5xXfFqXwTLcH/uGjjTrJCWabIY2VF8q696ZTBfela02mS6rSxdOUZ+Ce8oVlnKj81nNjWRgAGZjADLCVraDksLznrU/LAtUo3RDlVUb90pPBXMNWOP4kcWl4pvyLxk93gdLjzujr8W0Tij/FdaS8+ZW2NpbP61x+sqfhJ8v1FNzm5NuTcm2223i230tnfziqyneXUpb269THweC9x5xiy5Jtby5+fLN7J5oxzvoWG2pXGMYVJRnGoouSU8NVppc0kfekvPGhe7GFrrPYz19s4uPrLhqp733kAxD5iM1uvUjPbp0bL5q5Q9Jsras+NSlFvvw3lbacK6da0p9KhVk+xYxSJ9mLauhky1hPc40ouWPRjvKUz8yyr3KFatF4wjhTpPnCGPreMnL3GrNbWLy28i+sURP7R4AGBywIAD2czljlGy/wDZpfE2Fy28LW4/2an9rKI0a220yrarqSlN9ihFv44eZdWelzs8nXU3+DNLve43caPbl0uJGsUy1uAXAGFzZAAEAAAAAAevmllD0a/taze6FWKl+yXqv3M8gIms6nb1WdTEtn8rWiuLerSe9Vaco+a3fway3NCVOc6ctzhKUWnzTZsHmFlj0ywo1G8ZwjqVP3x3FZaXMhu3vFcRXqXWL7FWX2l4rf5m3kV7Vi0Ojyq96ReEEBlmDC5oAAPujVlCUZxk4yhJSjJcYyTxTRfuYed1PKNBKTUK9NYVqXP9cOcX7niuWOv5z2d3Uo1I1aU5U5weMZxeDXzXYXYcvSV+DPOOf8SHSPkiVtlGtuajWe0g+h48V5kXaJ7PPS3v6Ct8qUmnH7F3RW+Muer0e9EOyrb0qdVxo1lcQwTVRLDHHoa5ojLEb3CM0RM9qz8uoiZaOc0p31ZVqkWrejJNyf3s1/pjjx7WQxkjrZ6XjtKdnCUKFOEdVuinGU49r6PAjHNYndkYprE7smukvPiEYSsbSabacK9WD3QjwcItdOHSu4qjEYmBkyTedyZcs5J3IACtSAGYp4pJYttJJcW3uSQTCytCWTta4ublrdTpxpReG7Xm9aWHcox9okmmLKCp2CpJ769SMcP0rez2sw8h+g2FKlL7csalZ86s978t0f6UVZpYyz6Rf7KLxhbR1ex1Hvl/Bvn28Wvt07e1g1+5QpmGAYHMAAEAAAAAAEABONFWcStbrYVJYU7lpJt7o1ejz4FtZ15ChlC1nQngm/WpTwxdOqvsyX/3DE1uXlyfJl46Ms71eUfR60lt6Md+P3tPgprt4Jm3j5ImOlnR4uWJj+Oylr+yqUKs6NWOpOlLVnHt5rmnxxOsXrpDzLjfQ21HCNemt3QqserL5lHXFGVOcoTi4Sg2pRksHFroaM+XFNJZs+Gcdv8AHwlwS3t7klxb7EevDNbKDSasrnB799PD3Pejs5h3FGllG3nXwUE360uEZteq34mw0LiDSanFp8GpI94cMXjcyswceuSNzLXH6J5R/JXHsf5H0Uyj+SuPY/ybH7aHWj5obaHWj5ou9LX7X+jp9tcPonlH8lcewvmPonlH8lcewvmbH7aHWj5obaHWj5oelr9no6fbXD6J5R/JXHsL5j6KZR/JXHsL5mx+2h1o+aG2h1o+aHpa/Z6On21w+ieUfyVx7C+Y+ieUfyVx7C+ZsftodaPmhtodaPmh6Wv2ejp9tcHmnlH8lcex/k8qvRlCThOEqcovCUJxcZRfJpm0jrQ60fNFJ6Xru3q3tJUXGU4Umq0oYNYtrVTa4tb/ADK8uCKV3Eqs/GrSu4lBCfaKc13c11d1Y/VUH6mP3lX5L4nh5l5qVco1sFjCjBrbVej9secvhiXzRpULK3SWrSpUYd2rFdLGDDv8pOLg3+Vvh5ue+X42FnUq7nOXqUYdarLcvBcX2I13qTlJuUm5OTbk30ybxbJDnxnLLKN05rFUqWMaEH0RfGT7ZbvBJEcZ4z5O06j9K+Tl728fEAAKGUAAAAAAAAAAA7OTr2pb1YVqUnCdOWMZL4PmjrAROkxOl/ZmZ729/TUZONGul69KT4vnDHiiDaZ6FurmhOm1tZwltox6Yxa1ZS7d7XgV2ng002muDTwa8TMptvFtyb4uTbb8WaLZ+1NS1X5M3p1lhn2q81uUprktd7vecYM+9Mu/py7efXn7cvmY28+vP25fM4wT2lPaftybefXn7cvmNvPrz9uXzOMDtJ2t9uTbz68/bl8xt59efty+ZxgdpO1vtybefXn7cvmNvU68/bl8zjA7Sdp+3I7ifXn7cvmZtoKU4RlLUU5xUpv/AEKTScvDHE4jOI2ntP7bJZNpWtjaQUJU6VGnBPXckk/1N9LfEqTSFnw76ToUG428Xvlwddrpa6vxIZUuakoqEqk5Rj9mEptxXcm8DjbL755tHWPDRk5U2r1r4DABnZQABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//9k="
                    class="rounded-circle w-100">
            </div>
            <div class="col-9 pt-5">
                {{-- <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <div class="h4">{{ $user->username }}</div>

                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    </div>

                    @can('update', $user->profile)
                        <a href="/p/create">Add New Post</a>
                    @endcan

                </div>

                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan --}}

                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="{{ route('posts.create') }}">Add New Post</a>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>153</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>

        <div class="row">
            @foreach ($user->posts as $post)
                <div class="col-4">
                    <a href="{{ route('posts.show', $post->id) }}">
                        <img src="{{ asset("storage/$post->image") }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>

        {{-- <div class="row pt-5">
            @foreach ($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div> --}}
    </div>
@endsection

<template>
    
    <div class="container mx-auto w-full max-w-sm my-5">
            <div class = "flex justify-center">
                <p 
                    v-for="(item, index) in networks"
                    :key="index"
                    class = "text-white p-2 text-xl rounded"
                    :class="[item.color, index !== (networks.length -1 ) ? 'mr-2': '']"
                >
                    <a target="_blank" :href="item.url">
                        <i :class="item.icon"></i>
                    </a>
                </p>
            </div>
        </div>

</template>

<script>
    export default {
        data: function() {
            return {
                networks: [
                    {
                        color: "bg-blue-700",
                        url: "https://facebook.com",
                        icon: "fab fa-facebook"
                    },
                    {
                        color: "bg-blue-400",
                        url: "https://twitter.com",
                        icon: "fab fa-twitter"
                    },
                    {
                        color: "bg-red-600",
                        url: "https://instagram.com",
                        icon: "fab fa-instagram"
                    },
                    {
                        color: "bg-red-700",
                        url: "https://youtube.com",
                        icon: "fab fa-youtube"
                    },
                    {
                        color: "bg-red-700",
                        url: "https://pinterest.com",
                        icon: "fab fa-pinterest"
                    },
                    {
                        color: "bg-blue-700",
                        url: "https://mx.linkedin.com",
                        icon: "fab fa-linkedin-in"
                    },
                    {
                        color: "bg-green-500",
                        url: "https://web.whatsapp.com",
                        icon: "fab fa-whatsapp"
                    },
                ]
            }
        }
    }
</script>
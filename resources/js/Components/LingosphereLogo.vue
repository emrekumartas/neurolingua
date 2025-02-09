<script setup lang="ts">
defineProps<{
    size?: 'sm' | 'md' | 'lg';
    variant?: 'default' | 'white';
}>();
</script>

<template>
    <div
        class="inline-flex items-center"
        :class="{
      'gap-3': size === 'lg',
      'gap-2': size === 'md' || !size,
      'gap-1.5': size === 'sm'
    }"
    >
        <!-- Logo Mark -->
        <div
            class="relative rounded-lg overflow-hidden"
            :class="{
        'w-14 h-14': size === 'lg',
        'w-12 h-12': size === 'md' || !size,
        'w-8 h-8': size === 'sm'
      }"
        >
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-600 to-orange-400"></div>
            <div class="absolute inset-[2px] bg-black rounded-lg flex items-center justify-center">
                <svg
                    viewBox="0 0 40 40"
                    :class="{
            'w-10 h-10': size === 'lg',
            'w-8 h-8': size === 'md' || !size,
            'w-6 h-6': size === 'sm'
          }"
                    class="relative z-10"
                >
                    <!-- Brain Outline -->
                    <path
                        d="M20,8 C26,8 30,12 30,18 C30,24 26,28 20,28 C14,28 10,24 10,18 C10,12 14,8 20,8"
                        fill="none"
                        :stroke="variant === 'white' ? 'white' : 'url(#brainGradient)'"
                        stroke-width="1.5"
                        stroke-linecap="round"
                    />

                    <!-- Synaptic Connections -->
                    <path
                        d="M15,16 Q20,14 25,16 M15,20 Q20,18 25,20 M15,24 Q20,22 25,24"
                        fill="none"
                        :stroke="variant === 'white' ? 'white' : 'url(#brainGradient)'"
                        stroke-width="1.5"
                        stroke-linecap="round"
                    />

                    <!-- Neural Nodes -->
                    <circle cx="15" cy="16" r="1.5" :fill="variant === 'white' ? 'white' : 'url(#brainGradient)'" />
                    <circle cx="25" cy="16" r="1.5" :fill="variant === 'white' ? 'white' : 'url(#brainGradient)'" />
                    <circle cx="15" cy="20" r="1.5" :fill="variant === 'white' ? 'white' : 'url(#brainGradient)'" />
                    <circle cx="25" cy="20" r="1.5" :fill="variant === 'white' ? 'white' : 'url(#brainGradient)'" />
                    <circle cx="15" cy="24" r="1.5" :fill="variant === 'white' ? 'white' : 'url(#brainGradient)'" />
                    <circle cx="25" cy="24" r="1.5" :fill="variant === 'white' ? 'white' : 'url(#brainGradient)'" />

                    <!-- Language Symbols -->
                    <path
                        d="M18,12 L22,12 M17,14 L23,14"
                        :stroke="variant === 'white' ? 'white' : 'url(#brainGradient)'"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        opacity="0.7"
                    />

                    <!-- Pulse Animation -->
                    <circle
                        cx="20"
                        cy="20"
                        r="12"
                        :stroke="variant === 'white' ? 'white' : 'url(#brainGradient)'"
                        stroke-width="0.5"
                        fill="none"
                        opacity="0.3"
                        class="pulse-circle"
                    />

                    <defs>
                        <linearGradient id="brainGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color: #4f46e5;" /> <!-- Indigo -->
                            <stop offset="100%" style="stop-color: #22d3ee;" /> <!-- Cyan -->
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>

        <span
            class="font-bold tracking-tight leading-none py-1"
            :class="{
        'text-5xl': size === 'lg',
        'text-4xl': size === 'md' || !size,
        'text-3xl': size === 'sm',
        'text-white': variant === 'white',
        'bg-gradient-to-r from-indigo-600 to-orange-400 text-transparent bg-clip-text': !variant || variant === 'default'
      }"
        >
      <span class="inline-block">NeuroLingua</span>
    </span>
    </div>
</template>

<style scoped>
@keyframes pulse {
    0% {
        transform: scale(0.95);
        opacity: 0.5;
    }
    50% {
        transform: scale(1.05);
        opacity: 0.3;
    }
    100% {
        transform: scale(0.95);
        opacity: 0.5;
    }
}

.pulse-circle {
    transform-origin: center;
    animation: pulse 3s ease-in-out infinite;
}
</style>

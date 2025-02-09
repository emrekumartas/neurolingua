<script setup lang="ts">
import { ref } from 'vue';
import { useMotion } from '@vueuse/motion';

const languages = [
  { text: "Hello", color: "text-blue-400" },
  { text: "Bonjour", color: "text-green-400" },
  { text: "Hola", color: "text-yellow-400" },
  { text: "こんにちは", color: "text-purple-400" },
  { text: "你好", color: "text-pink-400" }
];

const containerRef = ref(null);
const codeBlockRef = ref(null);
const pathRef = ref(null);

useMotion(containerRef, {
  initial: { opacity: 0 },
  enter: {
    opacity: 1,
    transition: { 
      duration: 1000,
      repeat: Infinity,
      repeatType: "reverse",
      repeatDelay: 2000
    }
  }
});

useMotion(codeBlockRef, {
  initial: { opacity: 0, x: -20 },
  enter: {
    opacity: 1,
    x: 0,
    transition: { 
      duration: 800,
      repeat: Infinity,
      repeatType: "reverse",
      repeatDelay: 3000
    }
  }
});

const getItemAnimation = (index: number) => ({
  initial: { opacity: 0, y: 20, scale: 0.8 },
  enter: {
    opacity: 1,
    y: 0,
    scale: 1,
    transition: {
      delay: index * 200,
      duration: 800,
      repeat: Infinity,
      repeatType: "reverse",
      repeatDelay: 2000,
      type: 'spring',
      stiffness: 100,
      damping: 10
    }
  }
});
</script>

<template>
  <div class="relative w-full h-[500px] bg-black/40 rounded-2xl overflow-hidden backdrop-blur-sm border border-white/10">
    <!-- Background grid effect -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
    
    <div class="relative h-full flex items-center justify-center">
      <!-- Code snippet on the left -->
      <div
        ref="codeBlockRef"
        class="absolute left-8 top-1/2 -translate-y-1/2 bg-black/60 p-4 rounded-lg border border-white/10 font-mono text-sm text-white/80"
      >
        <pre>
{
  "greeting": {
    "en": "Hello",
    "fr": "Bonjour",
    "es": "Hola",
    "ja": "こんにちは",
    "zh": "你好"
  }
}</pre>
      </div>

      <!-- Central translation animation -->
      <div
        ref="containerRef"
        class="flex flex-col items-center gap-4"
      >
        <div
          v-for="(lang, index) in languages"
          :key="lang.text"
          :ref="el => { if (el) useMotion(el, getItemAnimation(index)) }"
          class="relative"
        >
          <span :class="[`text-2xl font-bold ${lang.color}`, 'glow-effect']">
            {{ lang.text }}
          </span>
        </div>
      </div>

      <!-- Animated connection lines -->
      <svg class="absolute inset-0 w-full h-full pointer-events-none">
        <defs>
          <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" stop-color="#FF5F15" stop-opacity="0.2" />
            <stop offset="100%" stop-color="#22C55E" stop-opacity="0.2" />
          </linearGradient>
        </defs>
        <path
          ref="pathRef"
          d="M 100 250 C 200 100, 400 400, 500 250"
          stroke="url(#lineGradient)"
          stroke-width="1"
          fill="none"
          class="animated-path"
        />
      </svg>
    </div>
  </div>
</template>

<style scoped>
.glow-effect {
  animation: glow 2s ease-in-out infinite;
}

@keyframes glow {
  0%, 100% { opacity: 0.8; }
  50% { opacity: 1; }
}

.animated-path {
  stroke-dasharray: 1000;
  stroke-dashoffset: 1000;
  animation: draw 4s ease-out infinite;
}

@keyframes draw {
  0% {
    stroke-dashoffset: 1000;
  }
  50% {
    stroke-dashoffset: 0;
  }
  100% {
    stroke-dashoffset: -1000;
  }
}
</style>
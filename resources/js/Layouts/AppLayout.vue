<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import LingosphereLogo from "../Components/LingosphereLogo.vue";
import TranslationAnimation from "../Components/TranslationAnimation.vue";

</script>

<template>
    <v-app>
        <div class="landing-page">
            <!-- Navigation -->
            <v-app-bar
                flat
                color="black"
                height="72"
                class="px-6"
                elevation="0"
                app
                fixed
            >
                <LingosphereLogo size="md" />
                <v-spacer />
                <div class="d-flex align-center gap-6">
                    <v-btn variant="text" class="text-white text-body-1">Features</v-btn>
                    <v-btn variant="text" class="text-white text-body-1">Pricing</v-btn>
                    <v-btn variant="text" class="text-white text-body-1">Documentation</v-btn>
                    <Link href="/login" class="text-decoration-none">
                        <v-btn variant="text" class="text-white text-body-1">Sign in</v-btn>
                    </Link>
                    <Link href="/login" class="text-decoration-none">
                        <v-btn
                            color="orange"
                            class="text-white font-weight-medium"
                            rounded="pill"
                            size="large"
                            elevation="0"
                        >
                            Get Started
                        </v-btn>
                    </Link>
                </div>
            </v-app-bar>

            <v-main class="bg-black">
                <!-- Hero Section -->
                <v-container class="hero-section py-16">
                    <v-row align="center" class="mt-16">
                        <v-col cols="12" lg="6">
                            <div class="hero-content">
                                <div class="mb-4">
                                    <v-chip
                                        color="orange"
                                        class="font-weight-medium px-4 py-2"
                                        size="large"
                                    >
                                        Now in Beta
                                    </v-chip>
                                </div>
                                <h1 class="text-h2 font-weight-bold mb-6 text-white hero-title">
                                    AI-Powered Language<br>
                                    Translation Platform
                                </h1>
                                <p class="text-grey-lighten-1 text-h6 mb-8 hero-subtitle">
                                    Transform your content with neural machine translation. Built for developers who demand precision, speed, and scalability.
                                </p>
                                <div class="d-flex align-center gap-4 mb-8">
                                    <Link href="/login" class="text-decoration-none">
                                        <v-btn
                                            color="orange"
                                            size="x-large"
                                            rounded="pill"
                                            class="font-weight-medium px-8"
                                            elevation="0"
                                        >
                                            Start Free Trial →
                                        </v-btn>
                                    </Link>
                                    <v-btn
                                        variant="outlined"
                                        color="grey-lighten-1"
                                        size="x-large"
                                        rounded="pill"
                                        class="font-weight-medium px-8"
                                        elevation="0"
                                    >
                                        View Demo
                                    </v-btn>
                                </div>
                                <div class="d-flex align-center gap-4">
                                    <div class="text-grey-lighten-2">
                                        <div class="text-body-1 font-weight-medium">5,000+</div>
                                        <div class="text-caption">Active Users</div>
                                    </div>
                                    <v-divider vertical class="mx-4"></v-divider>
                                    <div class="text-grey-lighten-2">
                                        <div class="text-body-1 font-weight-medium">100+</div>
                                        <div class="text-caption">Languages</div>
                                    </div>
                                    <v-divider vertical class="mx-4"></v-divider>
                                    <div class="text-grey-lighten-2">
                                        <div class="text-body-1 font-weight-medium">99.9%</div>
                                        <div class="text-caption">Accuracy</div>
                                    </div>
                                </div>
                            </div>
                        </v-col>
                        <v-col cols="12" lg="6" class="d-flex align-center justify-center">
                            <TranslationAnimation />
                        </v-col>
                    </v-row>
                </v-container>

                <!-- Features Grid -->
                <v-container class="py-16 features-section">
                    <v-row>
                        <v-col cols="12" class="text-center mb-16">
                            <h2 class="text-h3 font-weight-bold text-white mb-4">
                                Powerful Translation Features
                            </h2>
                            <p class="text-grey-lighten-1 text-h6 mx-auto" style="max-width: 600px;">
                                Everything you need to translate and manage your content at scale
                            </p>
                        </v-col>
                    </v-row>

                    <v-row>
                        <v-col cols="12" md="4">
                            <v-card
                                flat
                                rounded="lg"
                                class="pa-8 feature-card h-100"
                                elevation="0"
                            >
                                <div class="feature-icon mb-6">
                                    <v-icon size="32" color="orange">mdi-brain</v-icon>
                                </div>
                                <h3 class="text-h6 font-weight-bold mb-4 text-white">
                                    Neural Machine Translation
                                </h3>
                                <p class="text-grey-lighten-1">
                                    State-of-the-art AI models that understand context and maintain semantic accuracy.
                                </p>
                            </v-card>
                        </v-col>

                        <v-col cols="12" md="4">
                            <v-card
                                flat
                                rounded="lg"
                                class="pa-8 feature-card h-100"
                                elevation="0"
                            >
                                <div class="feature-icon mb-6">
                                    <v-icon size="32" color="orange">mdi-api</v-icon>
                                </div>
                                <h3 class="text-h6 font-weight-bold mb-4 text-white">
                                    Developer-First API
                                </h3>
                                <p class="text-grey-lighten-1">
                                    Simple, powerful REST API with comprehensive SDKs for all major programming languages.
                                </p>
                            </v-card>
                        </v-col>

                        <v-col cols="12" md="4">
                            <v-card
                                flat
                                rounded="lg"
                                class="pa-8 feature-card h-100"
                                elevation="0"
                            >
                                <div class="feature-icon mb-6">
                                    <v-icon size="32" color="orange">mdi-rocket-launch</v-icon>
                                </div>
                                <h3 class="text-h6 font-weight-bold mb-4 text-white">
                                    Real-Time Translation
                                </h3>
                                <p class="text-grey-lighten-1">
                                    Instant translations with WebSocket support for live content and chat applications.
                                </p>
                            </v-card>
                        </v-col>
                    </v-row>
                </v-container>

                <!-- CTA Section -->
                <v-container class="py-16 cta-section">
                    <v-row justify="center">
                        <v-col cols="12" md="10" lg="8" class="text-center">
                            <h2 class="text-h3 font-weight-bold mb-6 text-white">
                                Ready to Get Started?
                            </h2>
                            <p class="text-grey-lighten-1 text-h6 mb-8 mx-auto" style="max-width: 600px;">
                                Join thousands of developers who are already using NeuroLingua to power their applications.
                            </p>
                            <div class="d-flex justify-center gap-4">
                                <Link href="/login" class="text-decoration-none">
                                    <v-btn
                                        color="orange"
                                        size="x-large"
                                        rounded="pill"
                                        class="font-weight-medium px-8"
                                        elevation="0"
                                    >
                                        Start Free Trial
                                        <v-icon right class="ml-2">mdi-arrow-right</v-icon>
                                    </v-btn>
                                </Link>
                                <v-btn
                                    variant="outlined"
                                    color="grey-lighten-1"
                                    size="x-large"
                                    rounded="pill"
                                    class="font-weight-medium px-8"
                                    elevation="0"
                                >
                                    Contact Sales
                                </v-btn>
                            </div>
                        </v-col>
                    </v-row>
                </v-container>
            </v-main>
        </div>
    </v-app>
</template>

<style scoped>
.landing-page {
    background-color: #000000;
    min-height: 100vh;
}

.hero-section {
    position: relative;
    overflow: hidden;
}

.hero-title {
    line-height: 1.2;
    background: linear-gradient(to right, #fff, #ffa726);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.hero-subtitle {
    max-width: 600px;
    line-height: 1.6;
}

.feature-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: all 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-4px);
    background: rgba(255, 255, 255, 0.05);
    border-color: rgba(255, 255, 255, 0.2);
}

.feature-icon {
    width: 64px;
    height: 64px;
    border-radius: 16px;
    background: rgba(255, 152, 0, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
}

.gap-4 {
    gap: 1rem;
}

.gap-6 {
    gap: 1.5rem;
}

:deep(.v-btn) {
    text-transform: none;
    letter-spacing: 0;
}

:deep(.v-app-bar) {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(12px);
}
</style>

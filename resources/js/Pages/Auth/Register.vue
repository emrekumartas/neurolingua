<script setup lang="ts">
import { ref } from 'vue';
import { Link, useForm } from '@inertiajs/vue3';
import LingosphereLogo from "../../Components/LingosphereLogo.vue";

const showPassword = ref(false);

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post("/register", {
        onFinish: () => console.log("Registration completed"),
    });
};
</script>

<template>
    <v-app>
        <v-container fluid class="pa-0 fill-height bg-black">
            <v-row no-gutters class="fill-height">
                <!-- Left side - Registration Form -->
                <v-col cols="12" lg="6" class="d-flex align-center justify-center">
                    <v-card width="450" flat color="transparent" class="pa-4">
                        <v-card-text>
                            <div class="d-flex align-start mb-8">
                                <LingosphereLogo size="lg" />
                            </div>

                            <Link href="/" class="text-decoration-none">
                                <v-btn
                                    variant="text"
                                    color="orange"
                                    class="mb-8 ps-0"
                                    prepend-icon="mdi-arrow-left"
                                >
                                    Back to Home
                                </v-btn>
                            </Link>

                            <h2 class="text-h4 font-weight-bold text-white mb-2">Create your account</h2>
                            <p class="text-medium-emphasis text-white">
                                Join NeuroLingua and start localizing your software globally
                            </p>

                            <v-form @submit.prevent="submit" class="mt-8">
                                <v-text-field
                                    v-model="form.name"
                                    label="Full Name"
                                    type="text"
                                    variant="outlined"
                                    color="orange"
                                    bg-color="rgba(255, 255, 255, 0.1)"
                                    placeholder="John Doe"
                                    required
                                    class="mb-4"
                                    :error-messages="form.errors.name"
                                ></v-text-field>

                                <v-text-field
                                    v-model="form.email"
                                    label="Email address"
                                    type="email"
                                    variant="outlined"
                                    color="orange"
                                    bg-color="rgba(255, 255, 255, 0.1)"
                                    placeholder="john@example.com"
                                    required
                                    class="mb-4"
                                    :error-messages="form.errors.email"
                                ></v-text-field>

                                <v-text-field
                                    v-model="form.password"
                                    label="Password"
                                    :type="showPassword ? 'text' : 'password'"
                                    variant="outlined"
                                    color="orange"
                                    bg-color="rgba(255, 255, 255, 0.1)"
                                    placeholder="••••••••"
                                    required
                                    class="mb-4"
                                    :error-messages="form.errors.password"
                                    :append-inner-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
                                    @click:append-inner="showPassword = !showPassword"
                                ></v-text-field>

                                <v-text-field
                                    v-model="form.password_confirmation"
                                    label="Confirm Password"
                                    :type="showPassword ? 'text' : 'password'"
                                    variant="outlined"
                                    color="orange"
                                    bg-color="rgba(255, 255, 255, 0.1)"
                                    placeholder="••••••••"
                                    required
                                    class="mb-6"
                                    :error-messages="form.errors.password_confirmation"
                                ></v-text-field>

                                <v-btn
                                    type="submit"
                                    color="orange"
                                    size="large"
                                    rounded="pill"
                                    block
                                    class="mb-8 text-black font-weight-medium"
                                    elevation="2"
                                    :loading="form.processing"
                                >
                                    Create Account
                                </v-btn>

                                <div class="text-center d-flex align-center justify-center gap-2">
                                    <span class="text-orange">Already have an account?</span>
                                    <Link href="/login" class="text-decoration-none">
                                        <v-btn
                                            variant="text"
                                            color="orange"
                                            class="font-weight-medium text-decoration-underline"
                                        >
                                            Sign in
                                        </v-btn>
                                    </Link>
                                </div>
                            </v-form>
                        </v-card-text>
                    </v-card>
                </v-col>

                <!-- Right side - Decorative -->
                <v-col lg="6" class="d-none d-lg-block">
                    <div class="position-relative fill-height">
                        <v-img
                            src="https://images.unsplash.com/photo-1557426272-fc759fdf7a8d?auto=format&fit=crop&q=80"
                            cover
                            class="fill-height"
                        >
                            <div class="fill-height backdrop">
                                <v-container class="fill-height">
                                    <v-row align="center" justify="center">
                                        <v-col cols="12" md="10" lg="8">
                                            <v-card
                                                color="rgba(0, 0, 0, 0.8)"
                                                class="pa-6 rounded-xl backdrop-blur-sm border"
                                            >
                                                <blockquote class="text-h6 text-white mb-4">
                                                    "NeuroLingua's AI-powered translation has revolutionized how we handle our global content. The accuracy and speed are unmatched."
                                                </blockquote>
                                                <div class="text-medium-emphasis text-white">
                                                    <div class="font-weight-medium text-gray-400">Michael Zhang</div>
                                                    <div class="text-body-2 text-gray-400">CTO at GlobalTech Solutions</div>
                                                </div>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                </v-container>
                            </div>
                        </v-img>
                    </div>
                </v-col>
            </v-row>
        </v-container>
    </v-app>
</template>

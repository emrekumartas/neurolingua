<script setup lang="ts">
import { ref } from 'vue';
import { Link, useForm } from '@inertiajs/vue3';
import LingosphereLogo from "../../Components/LingosphereLogo.vue";

const showPassword = ref(false);

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post("/login", {
        onFinish: () => console.log("Login successful"),
    });
};
</script>

<template>
    <v-app>
        <v-container fluid class="pa-0 fill-height bg-black">
            <v-row no-gutters class="fill-height">
                <!-- Left side - Login Form -->
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

                            <h2 class="text-h4 font-weight-bold text-white mb-2">Welcome back</h2>
                            <p class="text-medium-emphasis text-white">Please sign in to your account</p>

                            <v-form @submit.prevent="submit" class="mt-8">
                                <v-text-field
                                    v-model="form.email"
                                    label="Email address"
                                    :error-messages="form.errors.email"
                                    type="email"
                                    variant="outlined"
                                    color="orange"
                                    bg-color="rgba(255, 255, 255, 0.1)"
                                    placeholder="john@example.com"
                                    required
                                    class="mb-4"
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
                                    :error-messages="form.errors.password"
                                    :append-inner-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
                                    @click:append-inner="showPassword = !showPassword"
                                    class="mb-4"
                                ></v-text-field>

                                <v-checkbox
                                    v-model="form.remember"
                                    label="Remember me"
                                    color="orange"
                                    class="mb-6"
                                ></v-checkbox>

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
                                    Sign in
                                </v-btn>

                                <div class="text-center d-flex align-center justify-center gap-2">
                                    <span class="text-orange">Don't have an account?</span>
                                    <Link href="/register" class="text-decoration-none">
                                        <v-btn
                                            variant="outlined"
                                            color="orange"
                                            class="font-weight-medium"
                                            rounded="pill"
                                            size="large"
                                            prepend-icon="mdi-account-plus"
                                        >
                                            Sign up
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
                            src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80"
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
                                                    "Lingosphere has transformed our localization workflow. What used to take weeks now happens in minutes, with better accuracy and consistency."
                                                </blockquote>
                                                <div class="text-medium-emphasis text-white">
                                                    <div class="font-weight-medium text-gray-400">Sarah Chen</div>
                                                    <div class="text-body-2 text-gray-400">Lead Developer at TechCorp</div>
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

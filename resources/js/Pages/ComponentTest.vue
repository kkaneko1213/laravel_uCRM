<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Label from '@/Components/InputLabel.vue'
import TextInput from '@/Components/TextInput.vue';

const emitTest = e => console.log(e);
</script>

<template>
<GuestLayout>
    何か文字を書く
    <Label value="件名">ラベルだよ</Label>
    <TextInput 
        modelValue="テストです。"
        @update:modelValue="emitTest"
    ></TextInput>
</GuestLayout>
</template>
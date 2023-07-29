<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/PrimaryButton.vue';
import PrimaryButton from '@/Components/PrimaryButton';
import { useForm, Head } from '@inertiajs/vue3';

const form = useForm({
    message:'',
});

</script>


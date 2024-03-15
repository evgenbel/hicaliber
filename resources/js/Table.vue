<script setup>

const props = defineProps({
    data:{
        type: Array
    }
})

</script>

<template>
    <el-table :data="data" style="width: 100%;">
        <el-table-column prop="name" label="Name" width="180" />
        <el-table-column prop="price" label="Price" width="180" />
        <el-table-column prop="bedrooms" label="Bedrooms" />
        <el-table-column prop="bathrooms" label="Bathrooms" />
        <el-table-column prop="storeys" label="Storeys" />
        <el-table-column prop="garages" label="Garages" />
    </el-table>
</template>

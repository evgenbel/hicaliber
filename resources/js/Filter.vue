<script setup>
import { reactive } from 'vue'

const emit = defineEmits(['filter'])
const formInline = reactive({
    name: '',
    price: [0, 1000000],
    bedrooms: '',
    bathrooms: '',
    storeys: '',
    garages: '',
})

const onSubmit = () => {
    emit('filter', formInline)
}
</script>
<style scoped>
.slider-demo-block {
    width: 300px;
    display: flex;
    align-items: center;
}
.slider-demo-block .el-slider {
    margin-top: 0;
    margin-left: 12px;
}
</style>
<template>
    <el-form :inline="true" :model="formInline" class="demo-form-inline">
        <div>
            <el-form-item label="Name">
                <el-input v-model="formInline.name" placeholder="Name" clearable />
            </el-form-item>
            <el-form-item label="Price">
                <div class="slider-demo-block">
                    <el-slider v-model="formInline.price" range :min="0" :max="1000000" />
                </div>
            </el-form-item>
            <el-form-item>
                <el-button type="primary" @click="onSubmit">Filter</el-button>
            </el-form-item>
        </div>

        <div>

        <el-form-item label="Bedrooms">
            <el-radio-group v-model="formInline.bedrooms" >
                <el-radio-button label="3" value="3" />
                <el-radio-button label="4" value="4"/>
                <el-radio-button label="5" value="5" />
            </el-radio-group>
        </el-form-item>

        <el-form-item label="Bathrooms">
            <el-radio-group v-model="formInline.bathrooms" >
                <el-radio-button label="2" value="2" />
                <el-radio-button label="3" value="3"/>
            </el-radio-group>
        </el-form-item>

        <el-form-item label="Storeys">
            <el-radio-group v-model="formInline.storeys" >
                <el-radio-button label="1" value="1" />
                <el-radio-button label="2" value="2"/>
            </el-radio-group>
        </el-form-item>

        <el-form-item label="Garages">
            <el-radio-group v-model="formInline.garages" >
                <el-radio-button label="1" value="1" />
                <el-radio-button label="2" value="2"/>
                <el-radio-button label="3" value="3"/>
            </el-radio-group>
        </el-form-item>

        </div>

    </el-form>
</template>

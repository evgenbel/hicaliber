<script setup>
import Filter from "./Filter.vue"
import Table from "./Table.vue"
import searchApi from "./api/search.js"
import { ref } from 'vue'

const search = (formInline) =>{
    searchApi.search(formInline, (response) => {
        data.value = response
    })
}

const data = ref([])
</script>
<style scoped>
.common-layout{
    width: 1200px;
    margin: 0 auto;
}
</style>
<template>
    <div className="common-layout">
        <el-container>
            <el-header style="padding-bottom: 100px;">
                <Filter @filter="search"></Filter>
            </el-header>
            <el-main>
                <Table :data = "data"/>
            </el-main>
        </el-container>
    </div>
</template>


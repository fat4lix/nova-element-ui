<template>
    <div class="detail-tabs-holder">
        <el-tabs :type="field.typeTab" class="rounded" v-model="activeTab" @tab-click="handleTabClick">
           <el-tab-pane
               v-for="(tab, index) in tabs"
               :label="tab.tabName || tab.field.resourceName.toLocaleUpperCase()"
               :key="'related-tabs-fields' + index"
               :name="tab.field.resourceName">
               <resource-index
                   class="resource-index-holder"
                   :resource-name="tab.field.resourceName"
                   :via-resource="resourceName"
                   :via-resource-id="resourceId"
                   :via-relationship="tab.targetRelation"
                   :relationship-type="tab.relationType"
                   @actionExecuted="actionExecuted"
                   :load-cards="false"
               />
           </el-tab-pane>
        </el-tabs>
    </div>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],

    data() {
        return {
            tabs: null,
            activeTab: ''
        }
    },

    mounted() {
        this.tabs = this.field.tabs;
        this.activeTab = this.field.activeTab;
        console.log(this.field.tabs)
    },

    methods: {
        /**
         * Handle the actionExecuted event and pass it up the chain.
         */
        actionExecuted() {
            this.$emit('actionExecuted')
        },

        handleTabClick(tab, event) {

        }
    },
}
</script>
